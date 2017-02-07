<div class="col-md-2">

    <div class="search">
    <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for...">
        <span class="input-group-btn">
        <button class="btn btn-default" type="button">Go!</button>
      </span>
    </div>
    </div>

    <br>





    {if isset($allArt)}
        {foreach $allArt as $art}
            <a href="/?controller=article&artId={$art['articles_id']}">{$art['articles_title']}</a>
            <br>
            {$art['articles_date']}
            <br>
            <hr>
        {/foreach}
    {else}
        <h3>Статей нет!</h3>
    {/if}


</div>