<?php
use Ruckusing\Migration\Base as Ruckusing_Migration_Base;

class AddAccessTokenColumnToUsers extends Ruckusing_Migration_Base
{
    public function up()
    {
        $this->add_column('directus_users', 'access_token', 'string', array(
            "limit"=>255,
            "default"=>""
        ));
    }//up()

    public function down()
    {
        $this->remove_column('directus_users', 'access_token', 'string');
    }//down()
}
