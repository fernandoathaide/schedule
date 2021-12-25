<?php
/*
ATENCAO: a tag php deve ser removida antes de gerar pela CLI.
Migration gerada automaticamente, deve ser editada para correto funcionamento.
Para saber mais sobre dbforge e migrations, ver:
----> DBForge: https://www.codeigniter.com/user_guide/database/forge.html
----> Migrations: https://www.codeigniter.com/user_guide/libraries/migration.html
*/
class Migration_create_event extends CI_Migration {

    public function up() {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned'       => TRUE,
                'auto_increment' => TRUE
            ),
            'eventname' => array(
                'type' => 'VARCHAR',
                'constraint' => 500,
            ),
            'eventlocation' => array(
                'type' => 'VARCHAR',
                'constraint' => 5000,
            ),
            'eventdescription' => array(
                'type' => 'VARCHAR',
                'constraint' => 5000,
            ),
            'eventlink' => array( //inscrição estadual
                'type' => 'VARCHAR',
                'constraint' => 5000,
            ),
            'eventtype' => array(
                'type' => 'BOOLEAN',
                'default' => FALSE,
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('event');
    }

    public function down() {
        $this->dbforge->drop_table('event');
    }

}
