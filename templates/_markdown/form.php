<div class="row editor-wrapper">
    <div class="col-md-6 editor">
        <textarea data-editor="markdown" class="markdown-input-source" name="content" id="md-input-<?php echo $id ?>" cols="30" rows="20"><?php echo html_entity_decode(html_entity_decode($markdown)); ?></textarea>
    </div>
    <div class="col-md-6 previewer" id="preview-<?php echo $id ?>"></div>
</div>

<!-- Main Script -->
<script>
    // Just let Marked JS work with Google Code Prettify
    marked.setOptions({
        highlight: function (code, lang) {
            // Fix for HTML code block
            if (lang === 'html') {
                code = $('<div />').text(code).html();
            }

            return prettyPrintOne(code, lang, false);
        },
        gfm: true,
        tables: true
    });

    // Turn textarea to Ace Editor
    var textarea = $("#md-input-<?php echo $id ?>"),
        editDiv = $('<div>', {
            position: 'absolute',
            width: textarea.width(),
            height: textarea.height(),
            'class': textarea.attr('class')
        }).insertBefore(textarea),
        editor = window.editor = ace.edit(editDiv[0]);

    textarea.css('display', 'none');

    textarea.closest('form').submit(function () {
        textarea.val(editor.getSession().getValue());
    });

    editor.renderer.setShowGutter(true);
    editor.getSession().setValue(textarea.val());
    editor.getSession().setMode('ace/mode/markdown');
    editor.setTheme('ace/theme/github');
    editor.setShowPrintMargin(false);
    editor.focus();

    // Set Ace Editor to fill the container
    $('.markdown-input-source').css('width', 'auto');

    if (editor.getSession()) {
        updatePreview(marked(editor.getSession().getValue()));
    }

    $(document).on('keyup', '.ace_text-input', function (e) {
        var html = marked(editor.getSession().getValue());

        updatePreview(html);
    });

    function updatePreview(html)
    {
        if (! html) {
            html = '<p>Nothing to preview</p>';
        }

        $('#preview-'+"<?php echo $id ?>").html(html);

        $('#preview-'+"<?php echo $id ?>"+' pre').addClass('prettyprint');

        prettyPrint();

        // Optional to give some styling
        $('#preview-'+"<?php echo $id ?>"+' table').addClass('table table-striped table-bordered table-hover table-condensed');

        // Make our table become responsive
        if (! $('#preview-'+"<?php echo $id ?>"+' table').closest('div').hasClass('table-responsive')) {
            $('#preview-'+"<?php echo $id ?>"+' table').wrap('<div class="table-responsive"></div>');
        }

        $('#preview pre').addClass('pre-scrollable');
    }
</script>
