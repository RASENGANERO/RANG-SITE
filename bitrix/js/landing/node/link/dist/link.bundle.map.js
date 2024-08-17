{"version":3,"file":"link.bundle.map.js","names":["this","BX","Landing","exports","landing_node_base","main_core","trim","Utils","isPlainObject","isString","textToPlaceholders","create","escapeText","decodeDataValue","Link","Base","constructor","options","super","type","isGrouped","Event","bind","node","onClick","isAllowInlineEdit","Dom","attr","Loc","getMessage","onChange","Runtime","debounce","onContentUpdate","History","getInstance","push","getField","setValue","getValue","isMenuMode","manifest","menuMode","event","preventDefault","stopPropagation","UI","Button","ColorAction","hideAll","Panel","StylePanel","isShown","show","data","preventSave","preventHistory","startValue","containsImage","field","hrefInput","text","includes","getPlaceholderData","href","then","placeholdersData","innerHTML","replace","name","catch","containsHtml","skipContent","setAttrValue","target","Object","keys","attrs","forEach","prototype","hasOwnProperty","call","Boolean","firstElementChild","tagName","value","getAttribute","startsWith","preventAdjustValue","html","allowedTypes","Field","LinkUrl","TYPE_BLOCK","TYPE_PAGE","TYPE_CRM_FORM","TYPE_CRM_PHONE","Main","params","TYPE_STORE","TYPE_CATALOG","features","TYPE_DISK_FILE","title","selector","content","siteId","site_id","landingId","id","makeDisplayedHrefValue","setHrefTypeSwitcherValue","getHrefStringType","removeHrefTypeFromHrefString","Node"],"sources":["link.bundle.js"],"mappings":"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"}