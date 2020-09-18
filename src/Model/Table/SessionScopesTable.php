<?php
declare(strict_types=1);

namespace OAuthServer\Model\Table;

use Cake\ORM\Table;

class SessionScopesTable extends Table
{
    /**
     * @param array $config Config
     * @return void
     */
    public function initialize(array $config): void
    {
        $this->setTable('oauth_session_scopes');
        $this->belongsTo('Sessions', [
                'className' => 'OAuthServer.Sessions',
            ]);
        $this->belongsTo('Scopes', [
                'className' => 'OAuthServer.Scopes',
            ]);
        parent::initialize($config);
    }
}
