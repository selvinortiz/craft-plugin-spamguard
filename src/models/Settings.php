<?php

namespace selvinortiz\spamguard\models;

use craft\base\Model;

class Settings extends Model
{
    public $akismetApiKey = 'foobie doobie doo';
    public $akismetOriginUrl = null;
    public $enableContactFormSupport = true;
    public $enableGuestEntriesSupport = true;
    public $enableSproutFormsSupport = true;
    public $enableCommentsSupport = true;
    public $logSubmissions = false;
    public $enableCpTab = true;
    public $pluginAlias = null;

    public function rules()
    {
        return [
            [['akismetApiKey', 'akismetOriginUrl'], 'required'],
            [['akismetApiKey'], 'string', 'max' => 25],
            [['akismetOriginUrl'], 'string'],
            [['enableContactFormSupport'], 'boolean'],
            [['enableGuestEntriesSupport'], 'boolean'],
            [['enableSproutFormsSupport'], 'boolean'],
            [['enableCommentsSupport'], 'boolean'],
            [['logSubmissions'], 'boolean'],
            [['enableCpTab'], 'boolean'],
            [['pluginAlias'], 'string'],
        ];
    }
}
