

$(document).ready(function () {
  var trigger = $('.hamburger'),
      overlay = $('.overlay'),
     isClosed = false;

    trigger.click(function () {
      hamburger_cross();      
    });

    function hamburger_cross() {

      if (isClosed == true) {          
        overlay.hide();
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
      } else {   
        overlay.show();
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = true;
      }
  }
  
  $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled');
  });  
});

//search *danica desembrana
(function(){
    'use strict';
  var $ = jQuery;
  $.fn.extend({
    filterTable: function(){
      return this.each(function(){
        $(this).on('keyup', function(e){
          $('.filterTable_no_results').remove();
          var $this = $(this), 
                        search = $this.val().toLowerCase(), 
                        target = $this.attr('data-filters'), 
                        $target = $(target), 
                        $rows = $target.find('tbody tr');
                        
          if(search == '') {
            $rows.show(); 
          } else {
            $rows.each(function(){
              var $this = $(this);
              $this.text().toLowerCase().indexOf(search) === -1 ? $this.hide() : $this.show();
            })
            if($target.find('tbody tr:visible').size() === 0) {
              var col_count = $target.find('tr').first().find('td').size();
              var no_results = $('<tr class="filterTable_no_results"><td colspan="'+col_count+'">No results found</td></tr>')
              $target.find('tbody').append(no_results);
            }
          }
        });
      });
    }
  });
  $('[data-action="filter"]').filterTable();
})(jQuery);

$(function(){
    // attach table filter plugin to inputs
  $('[data-action="filter"]').filterTable();
  
  $('.container').on('click', '.panel-heading span.filter', function(e){
    var $this = $(this), 
      $panel = $this.parents('.panel');
    
    $panel.find('.panel-body').slideToggle();
    if($this.css('display') != 'none') {
      $panel.find('.panel-body input').focus();
    }
  });
  $('[data-toggle="tooltip"]').tooltip();
})


// Drag and Drop *Trisha Francisco
$(document).ready(function() {
  var $tabs = $('#t_draggable1')
  $("tbody.t_sortable").sortable({
    connectWith: ".t_sortable",
    items: "> tr:not(:first)",
    appendTo: $tabs,
    helper:"clone",
    zIndex: 999990
  }).disableSelection();
  
  var $tab_items = $(".nav-tabs > li", $tabs).droppable({
    accept: ".t_sortable tr",
    hoverClass: "ui-state-hover",
    drop: function( event, ui ) { return false; }
  });
});
// Drag and Drop *Trisha Francisco

//block selector Danica desembrana
$(function(){
  $('div.block-chooser').not('.disabled').find('div.block-chooser-item').on('click', function(){
    $(this).parent().parent().find('div.block-chooser-item').removeClass('selected');
    $(this).addClass('selected');
    $(this).find('input[type="radio"]').prop("checked", true);
    
  });
});
//block selector


// Display Number of Units Trisha Francisco
function displayUnits(event) {

    var p = document.getElementById('units');

    p.innerHTML = "";

    var targetTable = document.getElementById('t_draggable2');
    var units = 0;

    for (var c = 1; c < targetTable.rows.length; c++) {
        units = units + Number(targetTable.rows.item(c).cells.item(6).textContent);
    }

    p.innerHTML = units;
}
// Display Number of Units Trisha Francisco

// Validate Number of Units Trisha Francisco
function validateUnits() {
  
   
    var targetTable = document.getElementById('t_draggable2');
    var units = 0;
    var p = document.getElementById('units');

    for (var c = 1; c < targetTable.rows.length; c++) {
        units = units + Number(targetTable.rows.item(c).cells.item(6).textContent);
    }



    document.getElementById('eform').onsubmit = function() {
        
        if (year == 4 || year == 3) {
            if (units > 18) {
                alert("You have exceeded the maximum allowed number of units.");
                return false;
            } else {
                alert("Your schedule has been submitted to the dean for approval.");
                return true;


            }

        } else if (year == 2 || year == 1) {
            if (units > 26) {
                alert("You have exceeded the maximum allowed number of units.");
                return false;
            } else {
                alert("Your schedule has been submitted to the dean for approval.");
                return true;
                

            }
        }

    }

}
// Validate Number of Units Trisha Francisco

// Delete subject on double click Trisha Francisco
$('#t_draggable2').dblclick(function(e){

    $(e.target).parent().remove(); // using jQuery


    $('#t_draggable1 tr:first-child').after($(e.target).parent());

})
// Delete subject on double click Trisha Francisco
