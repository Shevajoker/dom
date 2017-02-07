<div class="container">
    <h3>{$title}</h3>

    <div id="articleDivId">
        {if isset($infoArt)}
            {foreach $infoArt as $art}
                <a href="/?controller=article&artId={$art['articles_id']}">{$art['articles_title']}</a>
                {$art['articles_date']}
                <div class="title_{$art['articles_id']}">{$art['articles_text']}</div>
                <br>
                <input type="button" id="removeArt" onclick="removeArticle({$art['articles_id']});" value="Удалить">
                <hr>
            {/foreach}
        {else}
            <b>Статья удалена.</b>
        {/if}
    </div>

</div>