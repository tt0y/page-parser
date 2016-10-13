<?php require_once (ROOT.'/views/header.php'); ?>

<div id="results">
    
<?php require_once (ROOT.'/views/menu.php'); ?>

<form method="POST" id="remote_search" action="process">
    
    Web site address
    <div class="input-append">
        <input required type="url" class="span9" name="url" placeholder="http://beforetogo.com">
        <button type="submit" class="btn">Submit</button>
    </div>
        
        
    <p>Elements type</p>
    <div class="input-append">
        <label class="radio">
            <input type="radio" name="searchType" id="optionsRadios1" value="images" class="choices" checked>
            Images
        </label>
        <label class="radio">
            <input type="radio" name="searchType" id="optionsRadios2" value="links" class="choices">
            Links
        </label>
        <label class="radio">
            <input type="radio" name="searchType" id="optionsRadios3" value="text" class="choices">
            Search by word	
        </label>
        
        <input name="searchText" id="searched_text" style="display: none" placeholder="Metrika">
    </div>  
	
</form>

</div>

<?php require_once (ROOT.'/views/footer.php'); ?>
