var isCompatible=function(){if(navigator.appVersion.indexOf('MSIE')!==-1&&parseFloat(navigator.appVersion.split('MSIE')[1])<6){return false;}return true;};var startUp=function(){mw.config=new mw.Map(true);mw.loader.addSource({"local":{"loadScript":"/load.php","apiScript":"/api.php"},"common":{"loadScript":"http://slot1.wikia.com/load.php","apiScript":"/api.php"}});mw.loader.register([["site","1347483626",[],"site"],["noscript","1202226282",[],"noscript"],["startup","1347800440",[],"startup"],["user","1202226282",[],"user"],["user.groups","1202226282",[],"user"],["user.options","1347800440",[],"private"],["user.cssprefs","1347800440",["mediawiki.user"],"private"],["user.tokens","1202226282",[],"private"],["filepage","1202226282"],["skins.chick","1202226282",[],null,"common"],["skins.cologneblue","1331221974",[],null,"common"],["skins.modern","1202226282",[],null,"common"],["skins.monobook","1342739909",[],null,"common"],["skins.nostalgia","1331221974",[],null,"common"],["skins.simple",
"1202226282",[],null,"common"],["skins.standard","1332843692",[],null,"common"],["skins.vector","1331221974",[],null,"common"],["jquery","1340047927",[],null,"common"],["jquery.appear","1331221974",[],null,"common"],["jquery.arrowSteps","1331221974",[],null,"common"],["jquery.async","1331221974",[],null,"common"],["jquery.autoEllipsis","1331221974",["jquery.highlightText"],null,"common"],["jquery.byteLength","1331221974",[],null,"common"],["jquery.byteLimit","1331221974",["jquery.byteLength"],null,"common"],["jquery.checkboxShiftClick","1331221974",[],null,"common"],["jquery.client","1331221974",[],null,"common"],["jquery.collapsibleTabs","1331221974",[],null,"common"],["jquery.color","1331221974",["jquery.colorUtil"],null,"common"],["jquery.colorUtil","1331221974",[],null,"common"],["jquery.cookie","1331221974",[],null,"common"],["jquery.delayedBind","1331221974",[],null,"common"],["jquery.expandableField","1331221974",["jquery.delayedBind"],null,"common"],["jquery.farbtastic",
"1331221974",["jquery.colorUtil"],null,"common"],["jquery.footHovzer","1331221974",[],null,"common"],["jquery.form","1331221974",[],null,"common"],["jquery.getAttrs","1331221974",[],null,"common"],["jquery.highlightText","1331221974",[],null,"common"],["jquery.hoverIntent","1331221974",[],null,"common"],["jquery.json","1331221974",[],null,"common"],["jquery.localize","1331221974",[],null,"common"],["jquery.makeCollapsible","1331221974",[],null,"common"],["jquery.messageBox","1331221974",[],null,"common"],["jquery.mockjax","1331221974",[],null,"common"],["jquery.mw-jump","1331221974",[],null,"common"],["jquery.mwExtension","1331221974",[],null,"common"],["jquery.placeholder","1331221974",[],null,"common"],["jquery.qunit","1331221974",[],null,"common"],["jquery.qunit.completenessTest","1331221974",["jquery.qunit"],null,"common"],["jquery.spinner","1331221974",[],null,"common"],["jquery.suggestions","1331221974",["jquery.autoEllipsis"],null,"common"],["jquery.tabIndex","1331221974",[],
null,"common"],["jquery.tablesorter","1343927440",[],null,"common"],["jquery.textSelection","1336748680",[],null,"common"],["jquery.validate","1331221974",[],null,"common"],["jquery.xmldom","1331221974",[],null,"common"],["jquery.tipsy","1331221974",[],null,"common"],["jquery.ui.core","1347296360",["jquery"],"jquery.ui","common"],["jquery.ui.widget","1331221974",[],"jquery.ui","common"],["jquery.ui.mouse","1331221974",["jquery.ui.widget"],"jquery.ui","common"],["jquery.ui.position","1331221974",[],"jquery.ui","common"],["jquery.ui.draggable","1331221974",["jquery.ui.core","jquery.ui.mouse","jquery.ui.widget"],"jquery.ui","common"],["jquery.ui.droppable","1331221974",["jquery.ui.core","jquery.ui.mouse","jquery.ui.widget","jquery.ui.draggable"],"jquery.ui","common"],["jquery.ui.resizable","1331221974",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui","common"],["jquery.ui.selectable","1331221974",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui",
"common"],["jquery.ui.sortable","1347296360",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui","common"],["jquery.ui.accordion","1331221974",["jquery.ui.core","jquery.ui.widget"],"jquery.ui","common"],["jquery.ui.autocomplete","1331221974",["jquery.ui.core","jquery.ui.widget","jquery.ui.position"],"jquery.ui","common"],["jquery.ui.button","1331221974",["jquery.ui.core","jquery.ui.widget"],"jquery.ui","common"],["jquery.ui.datepicker","1331221974",["jquery.ui.core"],"jquery.ui","common"],["jquery.ui.dialog","1331221974",["jquery.ui.core","jquery.ui.widget","jquery.ui.button","jquery.ui.draggable","jquery.ui.mouse","jquery.ui.position","jquery.ui.resizable"],"jquery.ui","common"],["jquery.ui.progressbar","1331221974",["jquery.ui.core","jquery.ui.widget"],"jquery.ui","common"],["jquery.ui.slider","1331221974",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui","common"],["jquery.ui.tabs","1331221974",["jquery.ui.core","jquery.ui.widget"],"jquery.ui",
"common"],["jquery.effects.core","1331221974",["jquery"],"jquery.ui","common"],["jquery.effects.blind","1331221974",["jquery.effects.core"],"jquery.ui","common"],["jquery.effects.bounce","1331221974",["jquery.effects.core"],"jquery.ui","common"],["jquery.effects.clip","1331221974",["jquery.effects.core"],"jquery.ui","common"],["jquery.effects.drop","1331221974",["jquery.effects.core"],"jquery.ui","common"],["jquery.effects.explode","1331221974",["jquery.effects.core"],"jquery.ui","common"],["jquery.effects.fade","1331221974",["jquery.effects.core"],"jquery.ui","common"],["jquery.effects.fold","1331221974",["jquery.effects.core"],"jquery.ui","common"],["jquery.effects.highlight","1331221974",["jquery.effects.core"],"jquery.ui","common"],["jquery.effects.pulsate","1331221974",["jquery.effects.core"],"jquery.ui","common"],["jquery.effects.scale","1331221974",["jquery.effects.core"],"jquery.ui","common"],["jquery.effects.shake","1331221974",["jquery.effects.core"],"jquery.ui","common"],[
"jquery.effects.slide","1331221974",["jquery.effects.core"],"jquery.ui","common"],["jquery.effects.transfer","1331221974",["jquery.effects.core"],"jquery.ui","common"],["mediawiki","1346782497",[],null,"common"],["mediawiki.api","1331221974",["mediawiki.util"],null,"common"],["mediawiki.api.category","1331221974",["mediawiki.api","mediawiki.Title"],null,"common"],["mediawiki.api.edit","1331221974",["mediawiki.api","mediawiki.Title"],null,"common"],["mediawiki.api.parse","1331221974",["mediawiki.api"],null,"common"],["mediawiki.api.titleblacklist","1331221974",["mediawiki.api","mediawiki.Title"],null,"common"],["mediawiki.api.watch","1331221974",["mediawiki.api","mediawiki.user"],null,"common"],["mediawiki.debug","1331221974",["jquery.footHovzer"],null,"common"],["mediawiki.debug.init","1331221974",["mediawiki.debug"],null,"common"],["mediawiki.feedback","1331221974",["mediawiki.api.edit","mediawiki.Title","mediawiki.jqueryMsg","jquery.ui.dialog"],null,"common"],["mediawiki.htmlform",
"1331221974",[],null,"common"],["mediawiki.Title","1331221974",["mediawiki.util"],null,"common"],["mediawiki.Uri","1331221974",[],null,"common"],["mediawiki.user","1331221974",["jquery.cookie"],null,"common"],["mediawiki.util","1340901794",["jquery.client","jquery.cookie","jquery.messageBox","jquery.mwExtension"],null,"common"],["mediawiki.action.edit","1340895127",["jquery.textSelection","jquery.byteLimit"],null,"common"],["mediawiki.action.history","1331221974",["jquery.ui.button"],"mediawiki.action.history","common"],["mediawiki.action.history.diff","1331221974",[],"mediawiki.action.history","common"],["mediawiki.action.view.dblClickEdit","1340963204",["mediawiki.util","mediawiki.page.startup"],null,"common"],["mediawiki.action.view.metadata","1331221974",[],null,"common"],["mediawiki.action.view.rightClickEdit","1331221974",[],null,"common"],["mediawiki.action.watch.ajax","1339543189",["mediawiki.api.watch","mediawiki.util"],null,"common"],["mediawiki.language","1331221974",[],null
,"common"],["mediawiki.jqueryMsg","1331221974",["mediawiki.language","mediawiki.util"],null,"common"],["mediawiki.libs.jpegmeta","1331221974",[],null,"common"],["mediawiki.page.ready","1331221974",["jquery.checkboxShiftClick","jquery.makeCollapsible","jquery.placeholder","jquery.mw-jump","mediawiki.util"],null,"common"],["mediawiki.page.startup","1331221974",["jquery.client","mediawiki.util"],null,"common"],["mediawiki.special","1331221974",[],null,"common"],["mediawiki.special.block","1331221974",["mediawiki.util"],null,"common"],["mediawiki.special.changeemail","1331221974",["mediawiki.util"],null,"common"],["mediawiki.special.changeslist","1331221974",["jquery.makeCollapsible"],null,"common"],["mediawiki.special.movePage","1331221974",["jquery.byteLimit"],null,"common"],["mediawiki.special.preferences","1337957034",[],null,"common"],["mediawiki.special.recentchanges","1331221974",["mediawiki.special"],null,"common"],["mediawiki.special.search","1331221974",[],null,"common"],[
"mediawiki.special.undelete","1331221974",[],null,"common"],["mediawiki.special.upload","1331221974",["mediawiki.libs.jpegmeta","mediawiki.util"],null,"common"],["mediawiki.special.javaScriptTest","1331221974",["jquery.qunit"],null,"common"],["mediawiki.tests.qunit.testrunner","1331221974",["jquery.qunit","jquery.qunit.completenessTest","mediawiki.page.startup","mediawiki.page.ready"],null,"common"],["mediawiki.legacy.ajax","1332843582",["mediawiki.util","mediawiki.legacy.wikibits"],null,"common"],["mediawiki.legacy.commonPrint","1332844348",[],null,"common"],["mediawiki.legacy.config","1331221974",["mediawiki.legacy.wikibits"],null,"common"],["mediawiki.legacy.IEFixes","1332843582",["mediawiki.legacy.wikibits"],null,"common"],["mediawiki.legacy.mwsuggest","1341343751",["mediawiki.legacy.wikibits"],null,"common"],["mediawiki.legacy.preview","1332844348",["mediawiki.legacy.wikibits"],null,"common"],["mediawiki.legacy.protect","1339760860",["mediawiki.legacy.wikibits","jquery.byteLimit"]
,null,"common"],["mediawiki.legacy.shared","1341927472",[],null,"common"],["mediawiki.legacy.oldshared","1332843582",[],null,"common"],["mediawiki.legacy.upload","1343993192",["jquery.spinner","mediawiki.util"],null,"common"],["mediawiki.legacy.wikibits","1347456772",["mediawiki.util"],null,"common"],["mediawiki.legacy.wikiprintable","1332844348",[],null,"common"],["wikia.jquery.ui","1340897156",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse","jquery.ui.position","jquery.ui.draggable","jquery.ui.droppable","jquery.ui.sortable","jquery.ui.autocomplete","jquery.ui.slider","jquery.ui.tabs"],"jquery.ui","common"],["jquery.aim","1341873851",[],null,"common"],["jquery.mustache","1340806982",[],null,"common"],["jquery.autocomplete","1346286183",[],null,"common"],["wikia.yui","1340897156",[],null,"common"],["wikia.monobook","1346157388",[],null,"common"],["ext.gadget.Oasistheme","1311185624"],["ext.gadget.Roundtheme","1333707435"],["ext.math.mathjax","1331221974",[],"ext.math.mathjax"],
["ext.math.mathjax.enabler","1331221974"],["ext.geshi.local","1202226282"],["ext.wikihiero","1331221974"],["ext.wikihiero.Special","1331221974",["jquery.spinner"]],["ext.categoryTree","1346174584"],["ext.categoryTree.css","1331221974"],["ext.checkUser","1331221974",["mediawiki.util"]],["ext.cite","1331221974",["jquery.tooltip"]],["jquery.tooltip","1331221974"],["ext.abuseFilter","1341513119"],["ext.abuseFilter.edit","1346292934",["jquery.textSelection","jquery.spinner"]],["ext.abuseFilter.tools","1331221974",["jquery.spinner"]],["ext.abuseFilter.examine","1331221974"],["ext.nuke","1337617169"]]);mw.config.set({"wgLoadScript":"/load.php","debug":false,"skin":"oasis","stylepath":"http://slot1.images.wikia.nocookie.net/__cb59997/common/skins","wgUrlProtocols":"http\\:\\/\\/|https\\:\\/\\/|ftp\\:\\/\\/|irc\\:\\/\\/|ircs\\:\\/\\/|gopher\\:\\/\\/|telnet\\:\\/\\/|nntp\\:\\/\\/|worldwind\\:\\/\\/|mailto\\:|news\\:|svn\\:\\/\\/|git\\:\\/\\/|mms\\:\\/\\/|\\/\\/|xmpp\\:","wgArticlePath":
"/wiki/$1","wgScriptPath":"","wgScriptExtension":".php","wgScript":"/index.php","wgVariantArticlePath":false,"wgActionPaths":{},"wgServer":"http://runescape.wikia.com","wgUserLanguage":"en","wgContentLanguage":"en","wgVersion":"1.19.2","wgEnableAPI":true,"wgEnableWriteAPI":true,"wgDefaultDateFormat":"mdy","wgMonthNames":["","January","February","March","April","May","June","July","August","September","October","November","December"],"wgMonthNamesShort":["","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"wgMainPageTitle":"RuneScape Wiki","wgFormattedNamespaces":{"-2":"Media","-1":"Special","0":"","1":"Talk","2":"User","3":"User talk","4":"RuneScape","5":"RuneScape talk","6":"File","7":"File talk","8":"MediaWiki","9":"MediaWiki talk","10":"Template","11":"Template talk","12":"Help","13":"Help talk","14":"Category","15":"Category talk","100":"Update","101":"Update talk","110":"Forum","111":"Forum talk","112":"Exchange","113":"Exchange talk","114":"Charm","115":
"Charm talk","116":"Calculator","117":"Calculator talk","118":"Map","119":"Map talk","120":"Beta","121":"Beta talk","1100":"RelatedVideos","1200":"Message Wall","1201":"Thread","1202":"Message Wall Greeting"},"wgNamespaceIds":{"media":-2,"special":-1,"":0,"talk":1,"user":2,"user_talk":3,"runescape":4,"runescape_talk":5,"file":6,"file_talk":7,"mediawiki":8,"mediawiki_talk":9,"template":10,"template_talk":11,"help":12,"help_talk":13,"category":14,"category_talk":15,"update":100,"update_talk":101,"forum":110,"forum_talk":111,"exchange":112,"exchange_talk":113,"charm":114,"charm_talk":115,"calculator":116,"calculator_talk":117,"map":118,"map_talk":119,"beta":120,"beta_talk":121,"relatedvideos":1100,"message_wall":1200,"thread":1201,"message_wall_greeting":1202,"video":6,"video_talk":7,"image":6,"image_talk":7,"project":4,"project_talk":5},"wgSiteName":"RuneScape Wiki","wgFileExtensions":["png","gif","jpg","jpeg","ico","pdf","svg","odt","ods","odp","odg","odc","odf","odi","odm","ogg","ogv",
"oga"],"wgDBname":"runescape","wgFileCanRotate":true,"wgAvailableSkins":{"simple":"Simple","nostalgia":"Nostalgia","campfire":"Campfire","uncyclopedia":"Uncyclopedia","wikiamobile":"WikiaMobile","wikiaapp":"WikiaApp","vector":"Vector","lyricsminimal":"LyricsMinimal","monobook":"MonoBook","cologneblue":"CologneBlue","oasis":"Oasis","modern":"Modern","standard":"Standard","chick":"Chick","wowwiki":"wowwiki","test":"Test"},"wgExtensionAssetsPath":"/extensions","wgCookiePrefix":"wikicities","wgResourceLoaderMaxQueryLength":-1,"wgCaseSensitiveNamespaces":[],"wgSassParams":{"background-align":"center","background-fixed":"true","background-image":"http://images2.wikia.nocookie.net/__cb56/runescape/images/archive/5/50/20110104021204%21Wiki-background","background-tiled":"false","color-body":"#cda172","color-buttons":"#483821","color-header":"#483821","color-links":"#7f571f","color-page":"#fff8dc","page-opacity":"100","wordmark-font":"prociono"},"wgMWSuggestTemplate":
"http://runescape.wikia.com/api.php?action=opensearch\x26search={searchTerms}\x26namespace={namespaces}\x26suggest"});mw.loader.state({"jquery":"ready"});};if(isCompatible()){document.write(((window.wsl&&window.getJqueryUrl&&window.wgJqueryUrl)?(wsl.buildScript(window.getJqueryUrl())+"\x3cscript src=\"http://slot1.wikia.com/load.php?debug=false\x26amp;lang=en\x26amp;modules=mediawiki\x26amp;only=scripts\x26amp;skin=oasis\x26amp;version=20120904T181457Z\x26amp;*\"\x3e\x3c/script\x3e"):("\x3cscript src=\"http://slot1.wikia.com/load.php?debug=false\x26amp;lang=en\x26amp;modules=jquery%2Cmediawiki\x26amp;only=scripts\x26amp;skin=oasis\x26amp;version=20120904T181457Z\x26amp;*\"\x3e\x3c/script\x3e")));}delete isCompatible;;

/* cache key: runescape:resourceloader:filter:minify-js:7:e686bd5c84ca06ed9db14020dc5a792c */