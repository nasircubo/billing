{include file="sections/header.tpl"}
<div class="row">
    <div id="dpx"></div>
    <div class="col-lg-12" id="result">

        <div class="panel-body" style="background: #ffffff; margin-top: 10px;">
            <h4>{$_L['Total Income']}: {$_c['currency_code']} {number_format($cr,2,$_c['dec_point'],$_c['thousands_sep'])}</h4>
            <h4>{$_L['Total Expense']}: {$_c['currency_code']} {number_format($dr,2,$_c['dec_point'],$_c['thousands_sep'])}</h4>

            <hr>
            <h4>{$_L['All Transactions at Date']}: {date( $_c['df'], strtotime($mdate))}</h4>
            <hr>
            <table class="table table-striped table-bordered">

                <th>{$_L['Account']}</th>
                <th>{$_L['Type']}</th>
                <th>{$_L['Category']}</th>
                <th class="text-right">{$_L['Amount']}</th>
                <th>{$_L['Payer']}</th>
                <th>{$_L['Payee']}</th>
                <th>{$_L['Method']}</th>
                <th>{$_L['Ref']}</th>
                <th>{$_L['Description']}</th>
                <th class="text-right">{$_L['Dr']}</th>
                <th class="text-right">{$_L['Cr']}</th>
                <th class="text-right">{$_L['Balance']}</th>

                {foreach $d as $ds}
                    <tr>

                        <td>{$ds['account']}</td>
                        {*<td>{$ds['type']}</td>*}
                        <td>{ib_lan_get_line($ds['type'])}</td>
                        <td>{if $ds['category'] == 'Uncategorized'}{$_L['Uncategorized']} {else} {$ds['category']} {/if}</td>
                        <td class="text-right">{$_c['currency_code']} {number_format($ds['amount'],2,$_c['dec_point'],$_c['thousands_sep'])}</td>
                        <td>{$ds['payer']}</td>
                        <td>{$ds['payee']}</td>
                        <td>{$ds['method']}</td>
                        <td>{$ds['ref']}</td>
                        <td>{$ds['description']}</td>
                        <td class="text-right">{$_c['currency_code']} {number_format($ds['dr'],2,$_c['dec_point'],$_c['thousands_sep'])}</td>
                        <td class="text-right">{$_c['currency_code']} {number_format($ds['cr'],2,$_c['dec_point'],$_c['thousands_sep'])}</td>
                        <td class="text-right"><span {if $ds['bal'] < 0}class="text-red"{/if}>{$_c['currency_code']} {number_format($ds['bal'],2,$_c['dec_point'],$_c['thousands_sep'])}</span></td>

                    </tr>
                {/foreach}



            </table>
        </div>

    </div>




    <!-- Widget-2 end-->
</div>
 <!-- Row end-->


<!-- Row end-->


<!-- Row end-->
<input type="hidden" id="_lan_i18n" value="{Ib_I18n::get_code($_c['language'])}">
{include file="sections/footer.tpl"}
