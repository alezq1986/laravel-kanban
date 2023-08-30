<script>
    var {{ $jsObjName }} = new jKanban({
        element          : '{{ $element }}',                             // selector of the kanban container
        gutter           : '{{ $margin }}',                              // gutter of the board
        widthBoard       : '{{ $width }}',                               // width of the board
        responsivePercentage: @json($isResponsive),                      // if it is true I use percentage in the width of the boards and it is not necessary gutter and widthBoard
        dragItems        : @json($dragItems),                            // if false, all items are not draggable
        boards           : @json($boards, JSON_UNESCAPED_SLASHES),       // json of boards
        dragBoards       : @json($dragBoards),                           // the boards are draggable, if false only item can be dragged
        itemAddOptions: {
            enabled: false,                                              // add a button to board for easy item creation
            content: '+',                                                // text or html content of the board button
            class: 'kanban-title-button btn btn-default btn-xs',         // default class of the button
            footer: false                                                // position the button on footer
        },
        itemHandleOptions: {
            enabled             : false,                                 // if board item handle is enabled or not
            handleClass         : "item_handle",                         // css class for your custom item handle
            customCssHandler    : "drag_handler",                        // when customHandler is undefined, jKanban will use this property to set main handler class
            customCssIconHandler: "drag_handler_icon",                   // when customHandler is undefined, jKanban will use this property to set main icon handler class. If you want, you can use font icon libraries here
            customHandler       : "<span class='item_handle'>+</span> %s"// your entirely customized handler. Use %s to position item title
        },
        click            : function (el) {},                             // callback when any board's item are clicked
        context          : function (el, event) {},                      // callback when any board's item are right clicked
        dragEl           : function (el, source) {},                     // callback when any board's item are dragged
        dragendEl        : function (el) {},                             // callback when any board's item stop drag
        dropEl           : function (el, target, source, sibling) {},    // callback when any board's item drop in a board
        dragBoard        : function (el, source) {},                     // callback when any board stop drag
        dragendBoard     : function (el) {},                             // callback when any board stop drag
        buttonClick      : function(el, boardId) {},                      // callback when the board's button is clicked
        propagationHandlers: [],                                         // the specified callback does not cancel the browser event. possible values: "click", "context"
    })
</script>
