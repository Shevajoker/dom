<div class="container">
    <h3>{$title}</h3>

    <div id="articleDivId">
    {if isset($infoArt)}
        {foreach $infoArt as $art}
            <a href="/?controller=article&artId={$art['articles_id']}">{$art['articles_title']}</a>
            <br>
            {$art['articles_date']}
            <br>
            <br>
            <div class="title_{$art['articles_id']}">{$art['articles_text']}</div>
            <br>

        {/foreach}
        {else}
        <b>Статья удалена.</b>
    {/if}
    </div>

</div>