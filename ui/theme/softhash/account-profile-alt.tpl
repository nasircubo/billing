{include file="sections/header.tpl"}
<div class="row">
    <div class="col-md-12 m-t-md">
        <div class="alert alert-danger" id="emsg">
            <span id="emsgbody"></span>
        </div>
    </div>
</div>
<div class="row">
<div class="col-md-3">

    <div class="panel panel-default" id="ibox_panel">

            <div class="panel-body">
                <div class="thumb-info mb-md">
                    {if $d['img'] eq 'gravatar'}
                        <img src="http://www.gravatar.com/avatar/{($d['email'])|md5}?s=400" class="img-thumbnail img-responsive" alt="{$d['fname']} {$d['lname']}">
                    {elseif $d['img'] eq ''}
                        <img src="{$app_url}sysfrm/uploads/system/profile-icon.png" class="img-thumbnail img-responsive" alt="{$d['fname']} {$d['lname']}">
                    {else}
                        <img src="{$d['img']}" class="img-thumbnail img-responsive" alt="{$d['account']}">
                    {/if}
                    <div class="thumb-info-title">
                        <span class="thumb-info-inner">{$d['account']}</span>

                    </div>
                </div>





                {if $d['email'] neq ''}
                    <h5 class="text-muted">{$d['email']}</h5>
                {/if}
                {if $d['phone'] neq ''}
                    <h5 class="text-muted">{$d['phone']}</h5>
                {/if}







            </div>

        <div class="panel-body list-group border-bottom m-t-n-lg">
            <a href="#" id="activity" class="list-group-item active"><span class="fa fa-tasks"></span> {$_L['Activity']}</a>
            <a href="#" id="summary" class="list-group-item"><span class="fa fa-bar-chart-o"></span> {$_L['Summary']} </a>
            <a href="#" id="invoices" class="list-group-item"><span class="fa fa-credit-card"></span> {$_L['Invoices']} </a>
            <a href="#" id="transactions" class="list-group-item"><span class="fa fa-th-list"></span> {$_L['Transactions']}</a>
            <a href="#" id="email" class="list-group-item"><span class="fa fa-envelope-o"></span> {$_L['Email']}</a>
            <a href="#" id="edit" class="list-group-item"><span class="fa fa-pencil"></span> {$_L['Edit']}</a>
            <a href="#" id="more" class="list-group-item"><span class="fa fa-bars"></span> {$_L['More']}</a>
        </div>

        <div class="panel-body">






            <h5 class="text-muted">{$_L['Contact Notes']}</h5>

            <textarea class="form-control" id="notes" rows="6">{$d['notes']}</textarea>
            <input type="hidden" id="cid" value="{$d['id']}">
            <button type="button" id="note_update" class="btn btn-primary btn-block mt-sm">{$_L['Save']}</button>




        </div>

    </div>

</div>

<div class="col-md-9">

    <!-- START TIMELINE -->
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>{$d['account']}</h5>
        </div>

        <div class="ibox-content" id="ibox_form">
            <div id="progressbar">
            </div>
           <div id="sysfrm_ajaxrender">

           </div>

        </div>
    </div>
    <!-- END TIMELINE -->

</div>

</div>
{include file="sections/footer.tpl"}