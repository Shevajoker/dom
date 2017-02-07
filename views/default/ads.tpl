<div class="container">
    <h1>Объявления</h1>
    <div class="all_ads">
                <div class="row">
                    {if isset($ads)}
                    {foreach $ads as $this_ads}
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <div class="caption">
                                <h3>{$this_ads['ads_title']}</h3>
                                <p>{$this_ads['ads_text']}</p>
                            </div>
                        </div>
                    </div>
                    {/foreach}
                    {else}
                        <b>Объявлений нет.</b>
                    {/if}
                </div>
    </div>
</div>