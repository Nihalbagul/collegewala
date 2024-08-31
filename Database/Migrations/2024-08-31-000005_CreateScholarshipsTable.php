namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateScholarshipsTable extends Migration {
    public function up() {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'auto_increment' => true
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => '100'
            ],
            'details' => [
                'type' => 'TEXT'
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('scholarships');
    }

    public function down() {
        $this->forge->dropTable('scholarships');
    }
}
