<?php use yii\helpers\Url; ?>
<div class="panel">
  <div class="panel-heading">
    <?=Yii::t('DiscordappModule.base', '<strong>Discord</strong> App'); ?>
  </div>
  <div class="panel-body">
    <div id="chatContainer">
      <div id="chatLineHolder"></div>
      <div id="chatUsers" class="rounded"></div>
      <div id="chatBottomBar" class="rounded">
        <div class="tip"></div>
        <form id="submitForm" action="<?=Url::toRoute('/discordapp/chat/submit')?>" method="post" _lpchecked="1">
          <div class="input-group">
            <input id="chatText" type="text" name="chatText" placeholder="<?=Yii::t('DiscordappModule.base', 'Type Message ...')?>" class="form-control" maxlength="510">
            <span class="input-group-btn">
              <button type="submit" value="Submit" class="btn btn-primary btn-flat">
                <?=Yii::t('DiscordappModule.base', 'send')?>
                <span class="spinner fa fa-spinner fa-spin hidden"></span>
              </button>
            </span>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>