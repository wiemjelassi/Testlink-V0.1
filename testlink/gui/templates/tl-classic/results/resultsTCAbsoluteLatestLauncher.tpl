{* 
TestLink Open Source Project - http://testlink.sourceforge.net/

@filesource resultsTCAbsoluteLatestLauncher.tpl
@author     Francisco Mancardi (francisco.mancardi@gmail.com)

GUI to ask user for filters
*}

{lang_get var='labels' 
          s='submit_query,platform'}
{include file="inc_head.tpl" openHead="yes"}
{include file="inc_ext_js.tpl" bResetEXTCss=1}

<script>
jQuery( document ).ready(function() {
jQuery(".chosen-select").chosen({ width: "100%" });
});
</script>
</head>

<body>
	<h1 class="title">{$gui->pageTitle}</h1>
    <div class="workBack">
      <form action="{$gui->url2call}" method="post">
        <div>
          <table class="simple" style="margin-left: 0px;width: 80%">
            <tr>
                <th width="100%">{$labels.platform}</th>
            </tr>
            <tr>
            	<td>
                <select class="chosen-select" required="required"
                        name="platform_id" id="platform_id"
                        data-placeholder="{$labels.platform}">
                  {foreach key=plat_id item=platf 
                    from=$gui->platforms}
                    <option value="{$plat_id}">{$platf|escape}</option>
                  {/foreach}
		  	        </select>
              </td>
            </tr>
          </table>
        </div>
        <div>
          <input type="hidden" name="doAction" value="result">
        	<input type="submit" value="{$labels.submit_query}"/>
        </div>
      </form>
    </div>
</body>
</html>