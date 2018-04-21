<?php
/**
 * Migration generated using LaraAdmin
 * Help: http://laraadmin.com
 */

use Dwij\Laraadmin\Models\Module;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Module::generate("Contacts", 'contacts', 'first_name', 'fa-user', [

          //["field_name_db", "Label", "UI Type", "Unique", "Default_Value", "min_length", "max_length", "Required", "Pop_values"]
            ["designation", "Designation", "Dropdown", false, "", 0, 5, true, false, ["None","Mr.","Ms.","Mrs.","Dr.","Prof."],],
            ["first_name", "First Name", "Name", false, "", 0, 256, false, true],
            ["last_name", "Last Name", "Name", false, "", 0, 256, true, true],
            ["title", "Title", "String", false, "", 0, 256, false, false],
            ["organization", "Organization Name  ", "Dropdown", false, "", 0, 0, false, true, "@organizations", ],
            ["phone_primary", "Primary Phone", "Mobile", false, "", 10, 20, true, true],
            ["email", "Primary Email", "Email", true, "", 0, 250, false, true],
            ["lead_source", "Lead Source", "Dropdown", false, "", 0, 0, false, true, "@industry_types", ],
            ["department", "Department", "String", false, "", 0, 256, false, true],
            ["phone_secondary", "Secondary Phone", "Mobile", false, "", 10, 20, false, false],
            ["home_phone", "Home Phone", "Mobile", false, "", 10, 20, false, false],
            ["email2", "Secondary Email", "Email", false, "", 0, 256, false, false],
            ["dob", "Date of Birth", "Date", false, "", 0, 0, false, false],
            ["assistant", "Assistant", "String", false, "", 0, 256, false, false],
            ["assistant_phone", "Assistant Phone", "Mobile", false, "", 0, 20, false, false],
            ["assigned_to", "Assigned To", "Dropdown", false, "", 0, 0, true, true, "@employees", ],
            ["address", "Address", "Address", false, "", 0, 256, false, false],
            ["city", "City", "Address", false, "", 1, 50, false, false],
            ["country", "Country", "Address", false, "", 1, 50, false, false],
            ["description", "Description", "Textarea", false, "", 0, 0, false, false],
            ["profile_picture", "Contact Image", "Files", false, "", 0, 0, false, true]
        ]);
        

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('contacts')) {
            Schema::drop('contacts');
        }
    }
}
