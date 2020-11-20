<form role="search" method="get" id="searchform" class="searchform" action="http://127.0.0.1/dev/">
    <div>
        <label class="screen-reader-text" for="s"></label>
        <input type="text" value="" name="s" id="s" placeholder="<?php the_search_query(); ?>"
            class="form-control search-field">
        <input type="submit" id="searchsubmit" value="Search" class="brn btn-info">
    </div>
</form>