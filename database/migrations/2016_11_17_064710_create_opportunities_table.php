<?php
/**
 * Migration generated using LaraAdmin
 * Help: http://laraadmin.com
 */

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Dwij\Laraadmin\Models\Module;

class CreateOpportunitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Module::generate("Opportunities", 'opportunities', 'name', 'fa-lightbulb-o', [

          //["field_name_db", "Label", "UI Type", "Unique", "Default_Value", "min_length", "max_length", "Required", "Pop_values"]
            ["name", "Name", "Name", true, "", 0, 250, true],
            ["organization", "Organization", "Dropdown", false, "", 0, 0, false, "@organizations", ],
            ["contact", "Contact", "Dropdown", false, "", 0, 0, false, "@contacts", ],
            ["amount", "Amount", "Integer", false, "0", 0, 11, false],
            ["expected_close_date", "Expected close date", "Date", false, "", 0, 0, false],
            ["next_step", "Next Step", "TextField", false, "", 0, 256, false],
            ["assigned_to", "Assigned to", "Dropdown", false, "", 0, 0, false, "@employees", ],
            ["type", "Type", "Radio", false, "Existing Business", 0, 0, false, ["Existing Business","New Business"], ],
            ["lead_source", "Lead source", "Dropdown", false, "", 0, 0, false, ["Cold Call","Existing Customer","Self Generated","Employee","Partner","Public Relations","Direct Mail","Conference","Trade Show","Web Site","Word of mouth","Other"], ],
            ["sales_stage", "Sales stage", "Dropdown", false, "", 0, 0, false, ["Prospecting","Qualification","Needs Analysis","Value Proposition","Identify Decision Makers","Perception Analysis","Proposal or Price Quote","Negotiation or Review","Closed Won","Closed Lost"], ],
            ["probability", "Probability", "Integer", false, "0", 0, 100, false],
            ["forecast_amount", "Forecast Amount", "Integer", false, "0", 0, 11, false],
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
        if (Schema::hasTable('opportunities')) {
Schema::drop('opportunities');
        }
    }
}
