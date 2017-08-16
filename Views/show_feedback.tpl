<div class="logobuttons">

          <div class="" role="alert"></div>
          <form class="form-add " method="post" action="?action=30">
            <h2 class="form-signin-heading"><span class="glyphicon glyphicon-file"></span> Show feedback</h2>
            <label for="name" class="sr-only" >Name</label>
            <input type="text" name="name" class="form-control input-regular form-control-regular" placeholder="Name" value="{$name}" disabled>
            <label for="email" class="sr-only">Email address</label>
            <input type="email" name="email" id="inputEmail" class="form-control input-regular form-control-regular" placeholder="Email address" autofocus="" value="{$email}" disabled>
            <label for="data" class="sr-only" >Date</label>
            <input type="text" name="date" class="form-control input-regular form-control-regular" placeholder="Name" value="{$data|date_format:"%m/%d/%Y"}" disabled>
          <div class="form-group">
            <textarea class="form-control input-regular form-control-regular" rows="6" id="feedback" placeholder="Feedback" for="desc_feedback" name="desc_feedback" disabled>{$desc_feedback}</textarea>
          </div>

          <th scope="row">
          {if $check_feedback == "1" }
            <a href="?action=32&id={$IdFeedback}&page={$page}&Messagem=&tagSearch={$searchStr|escape:'url'}&param={$searchparamStr}" class="ok checkgreen ">
              <span class="glyphicon glyphicon-ok"></span>

            </a>
          {elseif $check_feedback == "0"}
          <a href="?action=32&id={$IdFeedback}&page={$page}&Messagem=&tagSearch={$searchStr|escape:'url'}&param={$searchparamStr}" class="ok">
            <span class="glyphicon glyphicon-ok"></span>

          </a>

          {/if}

          {if $status == "0" }
            <a href="?action=33&id={$IdFeedback}&page={$page}&Messagem=&tagSearch={$searchStr|escape:'url'}&param={$searchparamStr}" class=" remove status">
            <span class="glyphicon glyphicon-remove-circle"></span>

            </a>
          {elseif $status == "1"}
          <a href="?action=33&id={$IdFeedback}&page={$page}&Messagem=&tagSearch={$searchStr|escape:'url'}&param={$searchparamStr}" class="remove ">
          <span class="glyphicon glyphicon-trash"></span>

          </a>
          {/if}

          </th>

          <input type="hidden" name="searchStr" value="{$searchStr}" id="searchStr">
          <input type="hidden" name="searchparamStr" value="{$searchparamStr}" id="searchparamStr">
          <input type="hidden" name="page" value="{$page}" id="pageS">

          </form>
        </br>

          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
      </div>

      <script src="Views/js/function.js"></script>
