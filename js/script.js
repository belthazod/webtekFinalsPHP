

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
  //$('[data-action="filter"]').filterTable();
  
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
    var targetTable2 = document.getElementById('t_draggable1');
    var units = 0;
    for (var c = 1; c < targetTable.rows.length; c++) {
        units = units + Number(targetTable.rows.item(c).cells.item(6).textContent);
      if (targetTable.rows.item(c).cells.length > 6) {  
        targetTable.rows.item(c).cells.item(7).className="none";
        targetTable.rows.item(c).cells.item(8).className="none";
        targetTable.rows.item(c).cells.item(9).className="none";
      }

    }

    for (var d = 1; d < targetTable2.rows.length; d++) {
      if (targetTable2.rows.item(c).cells.length > 6) {
        targetTable2.rows.item(d).cells.item(7).className="text-left";
        targetTable2.rows.item(d).cells.item(8).className="text-left";
        targetTable2.rows.item(d).cells.item(9).className="text-left";
      }
    }

    p.innerHTML = units;
}
// Display Number of Units Trisha Francisco


// Validate same course code Trisha Francisco
$('#t_draggable1').mousedown(function(e){
    
    var course = $(e.target).parent().children(":nth-child(2)").text();
    var targetTable = document.getElementById('t_draggable2');

    for (var c = 1; c < targetTable.rows.length; c++) {
        crs = targetTable.rows.item(c).cells.item(1).textContent;

        if (crs == course) {
            alert('You have added this subject already.');
            $('#t_draggable1').trigger('mouseup');
        }
    }
})
// Validate same course code Trisha Francisco


// Validate Number of Units Trisha Francisco
function validateUnits() {
  
   
    var targetTable = document.getElementById('t_draggable2');
    var units = 0;
    var p = document.getElementById('units');

    for (var c = 1; c < targetTable.rows.length; c++) {
        units = units + Number(targetTable.rows.item(c).cells.item(6).textContent);
    }
 
    document.getElementById('eform').onsubmit = function() {
        if (units > maxUnits) {
                alert("You have exceeded the maximum allowed number of units.");
                return false;
            } else if (units == 0){
                alert("You have not selected any subject to pre-enroll. Please choose from the list of available subjects.");
                return false;
            } else {
                var result = confirm("Are you sure with the schedule you selected?");
                return result;
            }
    }
}
// Validate Number of Units Trisha Francisco

// Delete subject on double click Trisha Francisco
$('#t_draggable2').dblclick(function(e){
    if ($(e.target).parent().text() !== $(e.target).parent().parent().children(":first").text()) {
        $(e.target).parent().remove(); // using jQuery
        $('#t_draggable1 tbody tr:last-child').after($(e.target).parent());
    }
})

$('#t_draggable1').dblclick(function(e){
    if ($(e.target).parent().text() !== $(e.target).parent().parent().children(":first").text()) {
        $(e.target).parent().remove(); // using jQuery
        $('#t_draggable2 tbody tr:last-child').after($(e.target).parent());
    }
})
// Delete subject on double click Trisha Francisco

// Select block Trisha Francisco
function selectBlock() {     
    var tbl2 = document.getElementById('t_draggable2');
    var sourcehead = document.getElementById('blkhead');
    var source = document.getElementById('blk');
    var destination = document.getElementById('addSubj');
    var copyhead = sourcehead.cloneNode(true);
    var copy = source.cloneNode(true);

    while (destination.lastChild) {
        destination.removeChild(destination.lastChild);
    }

    copy.id = 'addSubj';
    var ch = copyhead.children; 
    var c = copy.children;

    var block = document.getElementById('currentBlock').textContent;
    var blkno = block.substr(block.length - 1);
    
    for (var i = 0; i < ch.length; i++) {  
        var srchead = document.getElementById('blkhead');
        var cpyhead = sourcehead.cloneNode(true);
        var dh = cpyhead.children;
        destination.appendChild(dh[i]);
    }

    for (var i = 0; i < c.length; i++) {  
      if (blkno == '1') {
        var src = document.getElementById('blk');
      } else if (blkno == '2') {
        var src = document.getElementById('blk').nextSibling;
      } else if (blkno == '3') {
        var src = document.getElementById('blk').nextSibling.nextSibling;
      } else if (blkno == '4') {
        var src = document.getElementById('blk').nextSibling.nextSibling.nextSibling;
      }
       

        var cpy = src.cloneNode(true);
        cpy.id = 'addSubj';
        var d = cpy.children;
        destination.appendChild(d[i]);
    }    

   displayUnits();
}
// Select block Trisha Francisco

/* Danica Rose Desembrana parallax*/



