
; /* Start:"a:4:{s:4:"full";s:90:"/bitrix/components/bitrix/catalog.comments/templates/.default/script.min.js?15928412085833";s:6:"source";s:71:"/bitrix/components/bitrix/catalog.comments/templates/.default/script.js";s:3:"min";s:75:"/bitrix/components/bitrix/catalog.comments/templates/.default/script.min.js";s:3:"map";s:75:"/bitrix/components/bitrix/catalog.comments/templates/.default/script.map.js";}"*/
(function(t){if(!!t.JCCatalogSocnetsComments){return}t.JCCatalogSocnetsComments=function(t){var s;this.errorCode=0;this.params={};this.serviceList={blog:false,facebook:false,vk:false};this.settings={blog:{ajaxUrl:"",ajaxParams:{},contID:"bx-cat-soc-comments-blg"},facebook:{contID:"bx-cat-soc-comments-fb",contWidthID:"",parentContID:"soc_comments",facebookJSDK:"facebook-jssdk",facebookPath:""},vk:{}};this.services={blog:{obBlogCont:null},facebook:{obFBCont:null,obFBContWidth:null,obFBParentCont:null,obFBjSDK:null,currentWidth:0}};this.activeTabId="";this.currentTab=-1;this.tabsContId="";this.tabList=[];this.obTabList=[];if(typeof t==="object"){this.params=t;if(!!this.params.serviceList&&typeof this.params.serviceList==="object"){for(s in this.serviceList){if(this.serviceList.hasOwnProperty(s)&&!!this.params.serviceList[s])this.serviceList[s]=true}}if(this.serviceList.blog)this.initParams("blog");if(this.serviceList.facebook)this.initParams("facebook");if(typeof this.params.tabs==="object"){this.activeTabId=this.params.tabs.activeTabId;this.tabsContId=this.params.tabs.tabsContId;this.tabList=this.params.tabs.tabList}}else{this.errorCode=-1}if(this.errorCode===0)BX.ready(BX.proxy(this.Init,this))};t.JCCatalogSocnetsComments.prototype.initParams=function(t){var s;if(!!this.params.settings&&typeof this.params.settings==="object"&&typeof this.params.settings[t]==="object"){for(s in this.settings[t]){if(this.settings[t].hasOwnProperty(s)&&!!this.params.settings[t][s])this.settings[t][s]=this.params.settings[t][s]}}};t.JCCatalogSocnetsComments.prototype.Init=function(){if(!this.tabList||!BX.type.isArray(this.tabList)||this.tabList.length===0){this.errorCode=-1;return}var t,s;for(t=0;t<this.tabList.length;t++){s=this.tabsContId+this.tabList[t];this.obTabList[t]={id:this.tabList[t],tabId:s,contId:s+"_cont",tab:BX(s),cont:BX(s+"_cont")};if(!this.obTabList[t].tab||!this.obTabList[t].cont){this.errorCode=-2;break}if(this.activeTabId===this.tabList[t])this.currentTab=t;BX.bind(this.obTabList[t].tab,"click",BX.proxy(this.onClick,this))}if(this.serviceList.blog){this.services.blog.obBlogCont=BX(this.settings.blog.contID);if(!this.services.blog.obBlogCont){this.serviceList.blog=false;this.errorCode=-16}}if(this.serviceList.facebook){this.services.facebook.obFBCont=BX(this.settings.facebook.contID);if(!this.services.facebook.obFBCont){this.serviceList.facebook=false;this.errorCode=-32}else{this.services.facebook.obFBContWidth=this.services.facebook.obFBCont.firstChild}this.services.facebook.obFBParentCont=BX(this.settings.facebook.parentContID)}if(this.errorCode===0){this.showActiveTab();if(this.serviceList.blog)this.loadBlog();if(this.serviceList.facebook)this.loadFB()}this.params={}};t.JCCatalogSocnetsComments.prototype.loadBlog=function(){var t;if(this.errorCode!==0||!this.serviceList.blog||this.settings.blog.ajaxUrl.length===0){return}t=this.settings.blog.ajaxParams;t.sessid=BX.bitrix_sessid();BX.ajax({timeout:30,method:"POST",dataType:"html",url:this.settings.blog.ajaxUrl,data:t,onsuccess:BX.proxy(this.loadBlogResult,this)})};t.JCCatalogSocnetsComments.prototype.loadBlogResult=function(t){if(BX.type.isNotEmptyString(t))BX.adjust(this.services.blog.obBlogCont,{html:t})};t.JCCatalogSocnetsComments.prototype.loadFB=function(){var t;if(this.services.facebook.obFBParentCont&&this.services.facebook.obFBContWidth){t=parseInt(this.services.facebook.obFBParentCont.offsetWidth,10);if(!isNaN(t)&&t>20){BX.adjust(this.services.facebook.obFBContWidth,{attrs:{"data-width":t-20}});this.services.facebook.currentWidth=t}if(!this.services.facebook.obFBjSDK){this.services.facebook.obFBjSDK=true;BX.defer(BX.proxy(function(t,s,i,o){var e,a=t.getElementsByTagName(s)[0];if(t.getElementById(i)){return}e=t.createElement(s);e.id=i;e.src=o;a.parentNode.insertBefore(e,a)}(document,"script",this.settings.facebook.facebookJSDK,this.settings.facebook.facebookPath),this))}}};t.JCCatalogSocnetsComments.prototype.getFBParentWidth=function(){var t=0;if(!!this.services.facebook.obFBParentCont){t=parseInt(this.services.facebook.obFBParentCont.offsetWidth,10);if(isNaN(t))t=0}return t};t.JCCatalogSocnetsComments.prototype.setFBWidth=function(t){var s=null,i,o;if(this.serviceList.facebook&&this.services.facebook.currentWidth!==t&&t>20&&!!this.services.facebook.obFBContWidth){if(!!this.services.facebook.obFBContWidth.firstChild&&!!this.services.facebook.obFBContWidth.firstChild.fitrstChild){s=this.services.facebook.obFBContWidth.firstChild.fitrstChild;if(!!s){i=s.getAttribute("src");o=i.replace(/width=(\d+)/gi,"width="+t);BX.adjust(this.services.facebook.obFBContWidth,{attrs:{"data-width":t-20}});this.services.facebook.currentWidth=t;BX.style(this.services.facebook.obFBContWidth.firstChild,"width",t+"px");BX.adjust(s,{attrs:{src:o},style:{width:t+"px"}})}}}};t.JCCatalogSocnetsComments.prototype.onResize=function(){if(this.serviceList.facebook)this.setFBWidth(this.getFBParentWidth())};t.JCCatalogSocnetsComments.prototype.onClick=function(){var t=BX.proxy_context,s=-1,i;for(i=0;i<this.obTabList.length;i++){if(t.id===this.obTabList[i].tabId){s=i;break}}if(s>-1){if(s!==this.currentTab){this.hideActiveTab();this.currentTab=s;this.showActiveTab()}}};t.JCCatalogSocnetsComments.prototype.hideActiveTab=function(){BX.removeClass(this.obTabList[this.currentTab].tab,"active");BX.addClass(this.obTabList[this.currentTab].cont,"tab-off");BX.addClass(this.obTabList[this.currentTab].cont,"hidden")};t.JCCatalogSocnetsComments.prototype.showActiveTab=function(){BX.onCustomEvent("onAfterBXCatTabsSetActive_"+this.tabsContId,[{activeTab:this.obTabList[this.currentTab].id}]);BX.addClass(this.obTabList[this.currentTab].tab,"active");BX.removeClass(this.obTabList[this.currentTab].cont,"tab-off");BX.removeClass(this.obTabList[this.currentTab].cont,"hidden")}})(window);
/* End */
;; /* /bitrix/components/bitrix/catalog.comments/templates/.default/script.min.js?15928412085833*/

//# sourceMappingURL=page_3ec00b7a792ced8902aadd3fc84f06e1.map.js