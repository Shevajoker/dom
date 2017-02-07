<div class="col-md-2">

    <section id="left_column">

        <h3>Новые объявления:</h3>

        <hr>
        {if isset($ads)}
            {foreach $ads as $this_ads}
                <p class="title_a">{$this_ads['ads_title']}</p>
                <p class="text_a">{$this_ads['ads_text']}</p>
                <hr>
            {/foreach}
        {else}
            <b>Объявлений нет!</b>
        {/if}
    </section>
</div>