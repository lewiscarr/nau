jQuery(document).ready(function($) {
  if (typeof(nau_views) === 'undefined') return;

  var $head = $('.forumheaderlist thead tr');
  $head.find('th').eq(1).after('<th class="header views">Views</th>');

  var $body = $('.forumheaderlist tbody');
  $body.find('tr').each(function() {
    var id, value = '0';
    // rip discussion ID out of link
    id = $(this).find('td').eq(0).children('a').attr('href').split('?d=')[1];
    
    if (nau_views[id]) {
      value = nau_views[id];
    }

    $(this).find('td').eq(2).after('<td class="replies"><a>' + value + '</a></td>');
  });
});