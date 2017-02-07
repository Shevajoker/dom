<div class="container">
    <h2>{$title}</h2>

    {$arUser}

    <br>
    <br>

    {*<a href="#" onclick="newArticle(); return false;">Новая статья</a>*}

    <h4>Новая статья</h4>
    <div id="newArticle">
        <label for="name_art">Название статьи</label>
        <input type="text" name="name_art" id="name_art" value=""><br>
        <label for="text_art">Текст</label><br>
        <textarea name="text_art" id="text_art" cols="30" rows="10"></textarea><br>

        <input type="button" id="addNewArt_btn" value="Добавить статью" onclick="addNewArt(); return false;">
    </div>

    <hr>

    {if isset($allArt)}

        {*{$allArt[0]['articles_title']}*}

        {foreach $allArt as $art}

        <a href="/?controller=article&artId={$art['articles_id']}">{$art['articles_title']}</a>
            <br>
            {$art['articles_date']}
        <div class="title_{$art['articles_id']}">{$art['articles_text']}</div>
            <br>
            <input type="button" id="removeArt" onclick="removeArticle({$art['articles_id']});" value="Удалить">
            <hr>
        {/foreach}
        {else}

        <h3>Статей нет!</h3>
    {/if}


</div>

