<div class="iframe_holder">
    <iframe id="signature-iframe" style="width:500px;height:240px;border:none;" src="https://emailsignature.good2grow.com/sig.php?e_email=<?php echo $_GET['e_email']; ?>&e_topper=<?php echo $_GET['e_topper']; ?>&e_name=<?php echo $_GET['e_name']; ?>&e_title=<?php echo $_GET['e_title']; ?>&e_phone=<?php echo $_GET['e_phone']; ?>"></iframe>
</div>
<div>
    <a class="button" onclick="copyIframeContent()">Copy Signature <i class="fa-solid fa-signature"></i></a>
    <a class="button" onclick="copyIframeHTML()">Copy Markdown <i class="fa-solid fa-code"></i></a>
</div>
<script>
    function copyIframeContent() {

    var iframe = document.getElementById('signature-iframe');
    
    var iframeDoc = iframe.contentDocument || iframe.contentWindow.document;

    var range = iframeDoc.createRange();
    range.selectNodeContents(iframeDoc.body);
    var selection = iframeDoc.getSelection();
    selection.removeAllRanges();
    selection.addRange(range);

    
    try {
        var successful = iframeDoc.execCommand('copy');
        if (successful) {
            alert('Signature copied to clipboard!');
        } else {
            alert('Failed to copy signature content.');
        }
        } catch (err) {
            alert('Error copying signature content: ' + err);
        }

    
    selection.removeAllRanges();
}

function copyIframeHTML() {
    var iframe = document.getElementById('signature-iframe');
    var iframeDoc = iframe.contentDocument || iframe.contentWindow.document;

    var htmlContent = iframeDoc.documentElement.outerHTML;

    var tempTextarea = document.createElement('textarea');
    tempTextarea.value = htmlContent;
    document.body.appendChild(tempTextarea);
    tempTextarea.select();
    document.execCommand('copy');
    document.body.removeChild(tempTextarea);

        alert('Signature Markdown content copied to clipboard!');
   }
</script>