{"version":3,"sources":["colorpickerfield.bundle.js"],"names":["this","BX","Landing","Ui","exports","landing_ui_field_basefield","main_core_events","main_core","ui_draganddrop_draggable","landing_ui_component_internal","landing_loc","landing_pageobject","_templateObject","_templateObject2","_templateObject3","ownKeys","object","enumerableOnly","keys","Object","getOwnPropertySymbols","symbols","filter","sym","getOwnPropertyDescriptor","enumerable","push","apply","_objectSpread","target","i","arguments","length","source","forEach","key","babelHelpers","defineProperty","getOwnPropertyDescriptors","defineProperties","Opacity","_EventEmitter","inherits","_this","options","undefined","classCallCheck","possibleConstructorReturn","getPrototypeOf","call","setEventNamespace","subscribeFromOptions","fetchEventsFromOptions","cache","Cache","MemoryCache","onPickerDragStart","bind","assertThisInitialized","onPickerDragMove","onPickerDragEnd","draggable","window","top","UI","DragAndDrop","Draggable","container","getLayout","type","HEADLESS","subscribe","createClass","value","_this2","remember","Tag","render","taggedTemplateLiteral","getPicker","getColorLayout","getColorLayoutWidth","_this3","getBoundingClientRect","width","Loc","getMessage","getValue","pickerLeft","Text","toNumber","Dom","style","layoutWidth","toFixed","setValue","_ref","parsedColor","_ref$skipOpacity","skipOpacity","from","concat","slice","join","to","background","opacity","leftPercent","left","set","wrapper","PageObject","getRootWindow","document","querySelector","event","_event$getData","getData","offsetX","_this$cache$get","get","leftPos","Math","min","max","emit","EventEmitter","_templateObject$1","_templateObject2$1","_templateObject3$1","_templateObject4","ColorPickerField","_BaseField","setLayoutClass","append","input","getUid","id","getRandom","getColorLabelInner","getColorLabel","getColorInput","onInputChange","_this4","getOpacityField","_this5","onChange","parsedValue","parseHex","backgroundColor","toRgba","toConsumableArray","preventEvent","hex","toHex","parsedHex","prepareHex","Type","isStringFilled","preparedHex","replace","split","reduce","acc","item","fillHex","parts","exec","parseInt","fillAlpha","_len","args","Array","_key","map","part","toString","hexToRgba","_len2","_key2","BaseField","Field","Event","Component"],"mappings":"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","file":"colorpickerfield.bundle.map.js"}