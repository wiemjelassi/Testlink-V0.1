{* 
TestLink Open Source Project - http://testlink.sourceforge.net/
@file: inc_exec_test_spec.tpl
Purpose: draw execution controls (input for notes and results)
Author : franciscom

*}  
    {$tableColspan="4"}
    {if $tlCfg->exec_cfg->steps_exec}
      {$tableColspan="6"}
    {/if}
    
    {$getReqAction="lib/requirements/reqView.php?showReqSpecTitle=1&requirement_id="}
    {$testcase_id=$args_tc_exec.testcase_id}
    {$tcversion_id=$args_tc_exec.id}
    
 
    {$cfdt = $args_design_time_cf[$testcase_id]}
    <div class="exec_test_spec">
      <div class="mainAttrContainer"> 
        <div class="summaryCONTAINER">
          {if $cfdt.before_summary neq ''}
            <div class="custom_field_container">
              {$cfdt.before_summary}
            </div>
            <br>
          {/if}

          <div class="labelHolder">{$args_labels.test_exec_summary}</div>
          <div>{if $gui->testDesignEditorType == 'none'}{$args_tc_exec.summary|nl2br}{else}{$args_tc_exec.summary}{/if}</div>

          {if $cfdt.after_summary neq ''}
            <div class="custom_field_container">
              {$cfdt.after_summary}
            </div>
          {/if}
        </div>

        <div class="preconditionsCONTAINER">
          {if $cfdt.before_preconditions neq ''}
            <div class="custom_field_container">
              {$cfdt.before_preconditions}
            </div>
            <br>
          {/if}

          <div class="labelHolder">{$args_labels.preconditions}</div>
          <div>{if $gui->testDesignEditorType == 'none'}{$args_tc_exec.preconditions|nl2br}{else}{$args_tc_exec.preconditions}{/if}</div>

          {if $cfdt.after_preconditions neq ''}
            <div class="custom_field_container">
              {$cfdt.after_preconditions}
            </div>
          {/if}
        </div>
    </div>

 
  <div class="workBack">
    <table class="simple">
      {if $cfdt.before_steps_results != ''}
        <tr>
          <td colspan="{$tableColspan}"> {$cfdt.before_steps_results}</td>
        </tr>
      {/if}

      {if $args_tc_exec.steps != '' && !is_null($args_tc_exec.steps)}
        <tr>
          <td>
            {include file="testcases/inc_steps.tpl"
                     layout=$args_cfg->exec_cfg->steps_results_layout
                     edit_enabled=false
                     ghost_control=false
                     add_exec_info=$tlCfg->exec_cfg->steps_exec
                     steps=$args_tc_exec.steps}
          </td>
        </tr>

        <tr>
          <td colspan="{$tableColspan}" style="text-align: center;"> 
          <br><b>{$args_labels.partialExecNoAttachmentsWarning}</b>
          </td>
        <tr>
        <tr>
          <td colspan="{$tableColspan}" style="text-align: center;"> 
           <br>
           <button class="btn btn-primary" name="saveStepsPartialExec"
             id="saveStepsPartialExec" type="submit">{$args_labels.saveStepsForPartialExec}</button>
          </td>
        <tr>
      {/if}

      <tr> <td colspan="{$tableColspan}"> &nbsp; </td></tr>
      <tr> <td colspan="{$tableColspan}"> &nbsp; </td></tr>

      {if $args_relations != '' && !is_null($args_relations)}
        <tr>
          <td colspan="{$tableColspan}">
          {include file="execute/exec_tc_relations.inc.tpl"  
                   argsColSpan=$tableColspan argsRelSet=$args_relations}  
          </td>
        </tr>
      {/if}

      <tr>
        <td colspan="{$tableColspan}">
          {if $args_design_time_cf[$testcase_id].standard_location != ''}
              <div id="cfields_design_time_tcversionid_{$tcversion_id}" class="custom_field_container" 
              style="background-color:#dddddd;">{$args_design_time_cf[$testcase_id].standard_location}
              </div>
          {/if} 
        </td>
      </tr>
   
      <tr>
        {* ------------------------------------------------------ *}
        {if $args_enable_custom_field and $args_tc_exec.active == 1}
          {if isset($args_execution_time_cf[$testcase_id]) && $args_execution_time_cf[$testcase_id] != ''}
            <tr>
              <td colspan="{$tableColspan}">
                <div id="cfields_exec_time_tcversionid_{$tcversion_id}" class="custom_field_container" 
                     style="background-color:#dddddd;">{$args_execution_time_cf[$testcase_id]}
                </div>
              </td>
            </tr>
          {/if}
        {/if} {* if $args_enable_custom_field *}
        {* ------------------------------------------------------ *}
      
        <td colspan="{$tableColspan}">
          {if $args_testplan_design_time_cf[$testcase_id] != ''}
              <div id="cfields_testplan_design_time_tcversionid_{$tcversion_id}" class="custom_field_container" 
              style="background-color:#dddddd;">{$args_testplan_design_time_cf[$testcase_id]}
              </div>
          {/if} 
        </td>
      </tr>
      
      <tr>
        <td colspan="{$tableColspan}">
        {if $args_tcAttachments[$testcase_id] neq null}
          {include file="attachments.inc.tpl" 
                   attach_downloadOnly=true 
                   attach_attachmentInfos=$args_tcAttachments[$testcase_id] 
                   attach_tableClassName="bordered"
                   attach_tableStyles="background-color:#dddddd;width:100%"}
        {/if}
        </td>
      </tr>

      {* TestScript Links (if any) *}
      {if isset($gui->scripts[$tcversion_id]) && !is_null($gui->scripts[$tcversion_id])}
        <tr style="background-color: #dddddd">
          {include file="inc_show_scripts_table.tpl"
           scripts_map=$gui->scripts[$tcversion_id]
           can_delete=false
           tcase_id=$tcversion_id
           tproject_id=$gui->tproject_id
          }
        </tr>
      {/if}

      {if isset($args_keywords)}
        <tr>
          <td colspan="{$tableColspan}">
            <b>{$args_labels.keywords}{$smarty.const.TITLE_SEP}</b>&nbsp
            {foreach item=keyword_item from=$args_keywords name=itemKeywords}
              {$keyword_item.keyword|escape}{if !$smarty.foreach.itemKeywords.last},&nbsp;{/if} 
            {/foreach}
          </td>
        </tr>
      {/if}

    </table>
  </div>

  <br />
  {if isset($args_req_details)}
    <div class="workBack">
      <table class="test_exec"  >
      <tr>
        <th colspan="{$tableColspan}" class="title">{$args_labels.reqs}</th>
      </tr>
        
      {foreach from=$args_req_details key=id item=req_elem}
      <tr>
        <td>
        <span class="bold">
         {$tlCfg->gui_separator_open}{$req_elem.req_spec_title}{$tlCfg->gui_separator_close}&nbsp;
         <a href="javascript:openLinkedReqWindow({$req_elem.id})"  
            title="{$args_labels.click_to_open}">
          {$req_elem.req_doc_id|escape}{$tlCfg->gui_title_separator_1}{$req_elem.title|escape} [{$args_labels.version} {$req_elem.version}]
         </a>
        </span>
       </td>
      </tr>
      {/foreach}
      </table>
      </div>
      <br />
  {/if}
