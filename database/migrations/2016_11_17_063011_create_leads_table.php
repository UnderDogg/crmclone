<?php
/**
 * Migration generated using LaraAdmin
 * Help: http://laraadmin.com
 */

use Dwij\Laraadmin\Models\Module;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Module::generate("Leads", 'leads', 'first_name', 'fa-check-square-o', [
            //["field_name_db", "Label", "UI Type", "Unique", "Default_Value", "min_length", "max_length", "Required", "Pop_values"]
          ["first_name", "First Name", "Name", false, "", 1, 100, false, true],
          ["last_name", "Last Name", "Name", false, "", 1, 100, true, false],
          ["phone_primary", "Primary Phone", "Mobile", false, "", 10, 20, true, true],
          ["phone_secondary", "Secondary Phone", "Mobile", false, "", 10, 20, false],
          ["email_primary", "Primary Email", "Email", false, "", 0, 256, false],
          ["email_secondary", "Secondary Email", "Email", false, "", 0, 256, false],
          ["company", "Company", "String", false, "", 0, 256, false],
          ["title", "Title", "String", false, "", 0, 256, false],
          [
            "lead_source",
            "Lead Source",
            "Dropdown",
            false,
            "",
            0,
            0,
            false,
            [
              "Cold Call",
              "Existing Customer",
              "Self Generated",
              "Employee",
              "Partner",
              "Public Relation",
              "Direct Mail",
              "Conference",
              "Trade Show",
              "Web Site",
              "Word of mouth",
              "Other"
            ],
          ],
          ["industry", "Industry", "Dropdown", false, "", 0, 0, false, "@industry_types",],
          ["assigned_to", "Assigned To", "Dropdown", false, "", 0, 0, false, "@employees",],
          ["employee_count", "Number of Employees", "Integer", false, "1", 1, 11, false],
          ["address", "Address", "Address", false, "", 0, 256, false],
          ["city", "City", "Address", false, "", 1, 50, false],
          ["country", "Country", "Address", false, "", 1, 50, false],
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
        if (Schema::hasTable('leads')) {
            Schema::drop('leads');
        }
    }
}
