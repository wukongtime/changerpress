$(function()
{
    $.setAjaxJSONER('.changeStatus');
    if(v.categoryID !== 0) $('.tree #category' + v.categoryID).addClass('active');
})
