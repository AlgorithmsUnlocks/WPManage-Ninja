/* Please make sure that you have change the NI_ID to actual table ID */
const $table = jQuery('#footable_parent_NI_ID table');

$table.on('after.ft.sorting after.ft.filtering', function () {
    const hasResults = !$table.find('tbody .footable-empty').length;

    if (hasResults) {
        $table.find('tbody, tfoot, .footable-header').show();
    } else {
        $table.find('tbody, tfoot, .footable-header').show();
        $table.find('.footable-empty td').html('No Result Found. Please make sure you have entered the code correctly and completely!');
    }
});
