<?php

namespace selvinortiz\spamguard;

use Craft;
use craft\base\Plugin;
use craft\events\RegisterUrlRulesEvent;
use craft\web\UrlManager;
use selvinortiz\spamguard\models\Settings;
use yii\base\Event;

class SpamGuard extends Plugin
{
    public $hasCpSection = true;
    public $hasCpSettings = true;

    public static $plugin;

    public function init()
    {
        parent::init();

        self::$plugin = $this;

        $this->name = $this->getName();

        Craft::info(
            Craft::t(
                'spamguard',
                '{name} plugin loaded',
                ['name' => $this->name]
            ),
            __METHOD__
        );
    }

    public function getName()
    {
        return Craft::t('spamguard', 'Spam Guard');
    }

    protected function createSettingsModel()
    {
        return new Settings();
    }

    protected function settingsHtml()
    {
        return Craft::$app->getView()->renderTemplate('spamguard/settings', [
            'settings' => $this->getSettings()
        ]);
    }
}

