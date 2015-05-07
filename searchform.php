<?php
?>
<form class="form-search" action="" method="get" accept-charset="utf-8" id="searchform" role="search">
    <div class="input-append">
        <input type="text" class="span2 search-query" name="s" id="s" value="<?php echo get_search_query() ?>" required>
        <button type="submit" class="btn">Buscar</button>
    </div>
</form>