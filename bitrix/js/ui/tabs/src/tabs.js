import { Tag, Dom, Event, Type, Runtime } from 'main.core';
import { OrderedArray } from 'main.core.collections';
import { TabsOptionsType, TabOptionsType } from './types';
import { EventEmitter } from 'main.core.events';
import { Tab } from './tab';

const justCounter = {
	localId: 0,
};

export class Tabs extends EventEmitter
{
	#index: number;
	#id: string;
	#items: OrderedArray<string, Tab>;
	#activeItem: ?Tab = null;

	title: string;
	titleIconClasses: string;

	content: ?HTMLElement;

	constructor(options: ?TabsOptionsType)
	{
		super();

		options = Type.isObjectLike(options) ? options : {};
		this.#index = (++justCounter.localId);
		this.#id = Type.isStringFilled(options.id) ? options.id : ('TabsId' + this.#index);
		this.setEventNamespace('UI:Tabs:' + options.id);

		this.#items = new OrderedArray((tabA: Tab, tabB: Tab) => {
			return tabA.getSort() > tabB.getSort() ? 1 : -1;
		});

		Array.from(options.items ?? []).forEach(
			(TabOptionsType: TabOptionsType) => this.addItem(new Tab(TabOptionsType))
		);

		this.activateItemDebounced = Runtime.debounce(this.activateItemDebounced, 100, this);

		if (this.#items.count() > 0 && !(this.#activeItem instanceof Tab))
		{
			this.activateItem(this.#items.getFirst());
		}
	}

	getIndex(): string
	{
		return this.#index;
	}

	getId(): string
	{
		return this.#id;
	}

	addItem(tab: Tab)
	{
		this.#items.add(tab);
		tab.setParent(this);
		if (tab.isActive())
		{
			this.activateItem(tab);
		}
	}

	activateItem(tab: Tab)
	{
		if (this.#items.has(tab) && this.#activeItem !== tab)
		{
			let inactiveTab = null;
			if (this.#activeItem instanceof Tab)
			{
				inactiveTab = this.#activeItem;
			}
			this.#activeItem = tab;
			this.activateItemDebounced(tab, inactiveTab);
		}
	}

	activateItemDebounced(activeTab: Tab, inactiveTab: ?Tab = null)
	{
		if (inactiveTab)
		{
			inactiveTab.inactivate();
		}
		activeTab.activate();
	}

	getContainer(): HTMLElement
	{
		if (this.content)
		{
			return this.content;
		}

		this.content = Tag.render`
			<div class="ui-tabs__tabs-container">
				<div class="ui-tabs__tabs-header-container" data-bx-role="headers"></div>
				<div class="ui-tabs__tabs-body-container" data-bx-role="bodies"></div>
			</div>`;

		const headers = this.content.querySelector('[data-bx-role="headers"]');
		const bodies = this.content.querySelector('[data-bx-role="bodies"]');

		this.#items.forEach(
				(tab: Tab) => {
					Event.bind(
						tab.getHeader(),
						'click',
						() => {
							this.activateItem(tab);
						}
					);
					Dom.append(tab.getHeader(), headers);
					Dom.append(tab.getBody(), bodies);
				}
			)
		;

		return this.content;
	}

	getItems(): Array<Tab>
	{
		return this.#items;
	}
}
