<?php

namespace humhub\modules\discordapp\tests\codeception\fixtures;

use humhub\modules\discordapp\models\ConfigureForm;
use yii\test\ActiveFixture;

class DiscordappFixture extends ActiveFixture
{
    public $dataFile = '@discordapp/tests/codeception/fixtures/data/discordapp.php';
}