<?php
/**
 * Migration generated using LaraAdmin
 * Help: http://laraadmin.com
 */

use Dwij\Laraadmin\Models\Module;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Module::generate("Projects", 'projects', 'name', 'fa-clone', [
          //["field_name_db", "Label", "UI Type", "Unique", "Default_Value", "min_length", "max_length", "Required", "Pop_values"]
            ["name", "Project Name", "Name", true, "", 0, 250, true],
            ["start_date", "Start Date", "Date", false, "", 0, 0, false],
            ["target_end_date", "Target End Date", "Date", false, "", 0, 0, false],
            ["actual_end_date", "Actual End Date", "Date", false, "", 0, 0, false],
            ["assigned_to", "Assigned To", "Dropdown", false, "", 0, 0, false, "@employees", ],
            ["status", "Status", "Dropdown", false, "", 0, 0, false, ["prospecting","initiated","in progress","waiting for feedback","on hold","completed","delivered","archived"], ],
            ["type", "Type", "Dropdown", false, "", 0, 0, false, "@industry_types", ],
            ["organization", "Organization", "Dropdown", false, "", 0, 0, false, "@organizations", ],
            ["target_budget", "Target Budget", "Integer", false, "", 1, 100, false],
            ["project_url", "Project Url", "String", false, "", 0, 256, false],
            ["priority", "Priority", "Radio", false, "", 0, 0, false, ["low","normal","high"], ],
            ["description", "Description", "Textarea", false, "", 0, 0, false]
        ]);
        

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('projects')) {
            Schema::drop('projects');
        }
    }
}
