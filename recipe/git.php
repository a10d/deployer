<?php
namespace Deployer;

require_once __DIR__ . '/common.php';

add('recipes', ['git']);

set('git_tag', runLocally('git describe --tags --always'));

set('git_commit_hash', runLocally('git rev-parse HEAD'));
