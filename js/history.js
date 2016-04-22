$(document).ready(function(){
	
	var nav, content, fetchAndInsert;
	
	nav = $('nav#mainNavigation');
	content = $('section#content');
	
	//fetches and inserts content into container
	fetchAndInsert = function(href){
		if (href.split('/').pop() === 'index.php') {
		$.ajax({
			url: 'http://localhost/protGit/' + href.split('/').pop(),
			method: 'GET',
			cache: false,
			success: function(data){
				content.html(data);
			}
		});
		}
		else {
		$.ajax({
			url: 'http://localhost/protGit/content/' + href.split('/').pop(),
			method: 'GET',
			cache: false,
			success: function(data){
				content.html(data);
			}
		});
		}
	};
	
	//handle back/forward klicks
	$(window).on('popstate', function() {
		fetchAndInsert(location.pathname);
	});
	
	nav.find('a').on('click', function(e){
		var href = $(this).attr('href');
		
		//manipulate history
		history.pushState(null, null, href.split('/').pop());
		//fetch and insert content
		fetchAndInsert(href.split('/').pop());
		
		e.preventDefault();
	});
	
});