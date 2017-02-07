
<div class="col-md-8">
    <section id="articles">
    <h2 class="text-center big_title">Последние статьи</h2>
    {if isset($allArt)}
        {foreach $allArt as $art}
            <a href="/?controller=article&artId={$art['articles_id']}" class="article_title">{$art['articles_title']}</a>
            <br>
            <span class="article_date">{$art['articles_date']}</span>
            <div class="title_{$art['articles_id']} article_text">{$art['articles_text']}</div>
            <br>
            <hr>
        {/foreach}
    {else}
        <h3>Статей нет!</h3>
    {/if}
    </section>
</div>


