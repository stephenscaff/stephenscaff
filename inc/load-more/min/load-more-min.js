jQuery(document).ready(function($){var n,e={settings:{nextLink:wpLoadMore.nextLink,pageNum:parseInt(wpLoadMore.startPage)+1,maxPages:parseInt(wpLoadMore.maxPages),postsContainer:".js-posts",linkContainer:$(".load-more"),link:$("#js-load-more"),linkButton:$("#js-load-more .load-more__btn"),linkText:"Whoa",linkLoadingText:"Loading..."},init:function(){n=this.settings,this.bindEvents()},bindEvents:function(){e.hideLink(),n.link.click(function(t){t.preventDefault(),n.pageNum<=n.maxPages&&e.loadPosts(),e.hideLink()})},hideLink:function(){n.pageNum>n.maxPages&&n.linkContainer.delay(500).fadeOut(800)},updateText:function(){n.link.text(n.loadingText)},loadPosts:function(){$.get(n.nextLink,function(e){$(e).find(n.postsContainer).children().appendTo(n.postsContainer).hide().slideDown("400"),site.lazy()}).done(function(n){e.endAnimation()}),e.animateLoader(),e.updatePage()},animateLoader:function(){n.linkContainer.addClass("is-animating"),n.linkButton.text("Weeeeeee!")},endAnimation:function(){setTimeout(function(){n.linkContainer.removeClass("is-animating"),n.linkButton.text("Keep Reading")},900)},updatePage:function(){n.pageNum++,n.nextLink=n.nextLink.replace(/\/page\/[0-9]*/,"/page/"+n.pageNum),console.log(n.nextLink,n.pageNum)}};$(".load-more").length&&e.init()});