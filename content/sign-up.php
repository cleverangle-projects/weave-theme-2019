<?php /* Template Name: Salesforce Form */ ?>


<!-- FORM: HEAD SECTION -->

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript">
  document.addEventListener("DOMContentLoaded", function(){
    const FORM_TIME_START = Math.floor((new Date).getTime()/1000);
    let formElement = document.getElementById("tfa_0");
    if (null === formElement) {
      formElement = document.getElementById("0");
    }
    let appendJsTimerElement = function(){
      let formTimeDiff = Math.floor((new Date).getTime()/1000) - FORM_TIME_START;
      let cumulatedTimeElement = document.getElementById("tfa_dbCumulatedTime");
      if (null !== cumulatedTimeElement) {
        let cumulatedTime = parseInt(cumulatedTimeElement.value);
        if (null !== cumulatedTime && cumulatedTime > 0) {
          formTimeDiff += cumulatedTime;
        }
      }
      let jsTimeInput = document.createElement("input");
      jsTimeInput.setAttribute("type", "hidden");
      jsTimeInput.setAttribute("value", formTimeDiff.toString());
      jsTimeInput.setAttribute("name", "tfa_dbElapsedJsTime");
      jsTimeInput.setAttribute("id", "tfa_dbElapsedJsTime");
      jsTimeInput.setAttribute("autocomplete", "off");
      if (null !== formElement) {
        formElement.appendChild(jsTimeInput);
      }
    };
    if (null !== formElement) {
      if(formElement.addEventListener){
        formElement.addEventListener('submit', appendJsTimerElement, false);
      } else if(formElement.attachEvent){
        formElement.attachEvent('onsubmit', appendJsTimerElement);
      }
    }
  });
</script>

<link href="https://www.tfaforms.com/dist/form-builder/5.0.0/wforms-layout.css?v=570-6" rel="stylesheet" type="text/css" />

<link href="https://www.tfaforms.com/uploads/themes/theme-56027.css" rel="stylesheet" type="text/css" />
<link href="https://www.tfaforms.com/dist/form-builder/5.0.0/wforms-jsonly.css?v=570-6" rel="alternate stylesheet" title="This stylesheet activated by javascript" type="text/css" />
<script type="text/javascript" src="https://www.tfaforms.com/wForms/3.11/js/wforms.js?v=570-6"></script>
<script type="text/javascript">
  wFORMS.behaviors.prefill.skip = false;
</script>
<script type="text/javascript" src="https://www.tfaforms.com/wForms/3.11/js/localization-en_US.js?v=570-6"></script>
<script>
  var FAoldJQ;
  if (typeof $ != 'undefined' && $.noConflict) FAoldJQ = $.noConflict(true);
</script>
<script src="https://www.tfaforms.com/js/jquery/jquery-2.1.4.min.js"></script>
<script src="https://www.tfaforms.com/js/typeahead/v1.2.0/typeahead.bundle.js"></script>
<script>
  var FA$ = $.noConflict(true);
  if (FAoldJQ) $ = FAoldJQ;
</script>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

<link href="<?php echo get_stylesheet_directory_uri() ?>/css/styles.css" rel="stylesheet"
      type="text/css" />

<!-- FORM: BODY SECTION -->
<body class="form-wrapper">
<div class="wFormContainer" >
  <div class="wFormHeader"></div>
  <style type="text/css">
    #tfa_106,
    *[id^="tfa_106["] {
      width: 250px !important;
    }
    #tfa_106-D,
    *[id^="tfa_106["][class~="field-container-D"] {
      width: auto !important;
    }

    #tfa_106-L,
    label[id^="tfa_106["] {
      width: 200px !important;
      min-width: 0px;
    }

    #tfa_114,
    *[id^="tfa_114["] {
      width: 258px !important;
    }
    #tfa_114-D,
    *[id^="tfa_114["][class~="field-container-D"] {
      width: auto !important;
    }

    #tfa_114,
    *[id^="tfa_114["] {
      height: 74px
    }
    #tfa_114-D,
    *[id^="tfa_114["][class~="field-container-D"] {
      height: auto !important;
    }
    #tfa_114-L,
    label[id^="tfa_114["],
    *[id^="tfa_114["][id$="-L"] {
      height: auto !important;
    }
  </style><div class=""><div class="wForm" id="4693583-WRPR" dir="ltr">
      <div class="codesection" id="code-4693583"><style type="text/css">

          .wForm {
            padding: 0px 6px !important;
          }
          .wFormContainer .wFormHeader
          { content: none;
            padding: 0px 6px !important;
          }

        </style></div>
      <h3 class="wFormTitle" id="4693583-T">Stay Connected: Join Our Mailing List</h3>
      <form method="post" action="https://www.tfaforms.com/responses/processor" class="hintsBelow labelsLeftAligned" id="4693583" role="form">
        <div class="oneField field-container-D    " id="tfa_1-D">
          <label id="tfa_1-L" class="label preField reqMark" for="tfa_1">First Name</label><div class="inputWrapper"><input type="text" id="tfa_1" name="tfa_1" value="" aria-required="true" title="First Name" class="required"></div>
        </div>
        <div class="oneField field-container-D    " id="tfa_3-D">
          <label id="tfa_3-L" class="label preField reqMark" for="tfa_3">Last Name</label><div class="inputWrapper"><input type="text" id="tfa_3" name="tfa_3" value="" aria-required="true" title="Last Name" class="required"></div>
        </div>
        <div class="oneField field-container-D    " id="tfa_5-D">
          <label id="tfa_5-L" class="label preField reqMark" for="tfa_5">Email</label><div class="inputWrapper"><input type="text" id="tfa_5" name="tfa_5" value="" aria-required="true" title="Email" class="validate-email required"></div>
        </div>
        <div class="oneField field-container-D    " id="tfa_105-D">
          <label id="tfa_105-L" class="label preField reqMark" for="tfa_105">US Zip Code</label><div class="inputWrapper">
            <input type="text" id="tfa_105" name="tfa_105" value="" aria-required="true" aria-describedby="tfa_105-HH" title="US Zip Code" data-dataset-allow-free-responses="1" autocomplete="off" data-dataset-id="81e62c38-e7a5-430e-beee-35dfe39ff566" data-dataset-map="c=tfa_118,d=tfa_120,f=tfa_122," data-dataset-url="https://typeahead.formassembly.com" data-dataset-action="query.php" class="required wfAutosuggest"><i class="fa fa-spinner fa-pulse fa-fw tt-spinner"></i><i class="fa fa-search tt-search" aria-hidden="true"></i><i class="fa fa-times-circle tt-clear no-input" aria-hidden="true"></i><span class="field-hint-inactive" id="tfa_105-H"><span id="tfa_105-HH" class="hint">If outside the US, please indicate your country.</span></span>
          </div>
        </div>
        <div id="tfa_123" class="section group wf-acl-hidden">
          <div class="oneField field-container-D    " id="tfa_118-D">
            <label id="tfa_118-L" class="label preField " for="tfa_118">City</label><div class="inputWrapper"><input type="text" id="tfa_118" name="tfa_118" value="" title="City" class=""></div>
          </div>
          <div class="oneField field-container-D    " id="tfa_120-D">
            <label id="tfa_120-L" class="label preField " for="tfa_120">State</label><div class="inputWrapper"><input type="text" id="tfa_120" name="tfa_120" value="" title="State" class=""></div>
          </div>
          <div class="oneField field-container-D    " id="tfa_122-D">
            <label id="tfa_122-L" class="label preField " for="tfa_122">Country</label><div class="inputWrapper"><input type="text" id="tfa_122" name="tfa_122" value="" title="Country" class=""></div>
          </div>
        </div>
        <div class="oneField field-container-D    " id="tfa_106-D">
          <label id="tfa_106-L" class="label preField " for="tfa_106">What interests you about
            the Weave project?</label><div class="inputWrapper select"><select id="tfa_106"
                                                                          name="tfa_106" title="What interests you about the Weave project?" class=""><option value="">Please select...</option>
              <option value="tfa_107" id="tfa_107" class="">I want to hear more about Weave's work.</option>
              <option value="tfa_108" id="tfa_108" class="">I'm a weaver and want to get involved.</option>
              <option value="tfa_109" id="tfa_109" data-conditionals="#tfa_114,#tfa_115,#tfa_117" class="">My organization weaves people and you should know about us.</option>
              <option value="tfa_110" id="tfa_110" data-conditionals="#tfa_114" class="">I have a story about someone weaving our community.</option>
              <option value="tfa_111" id="tfa_111" class="">I'm a journalist and want to hear about Weavers.</option>
              <option value="tfa_112" id="tfa_112" data-conditionals="#tfa_113" class="">Something else</option></select></div>
        </div>
        <div class="oneField field-container-D    " id="tfa_117-D">
          <label id="tfa_117-L" class="label preField " for="tfa_117">Website:</label><div class="inputWrapper"><input type="text" id="tfa_117" name="tfa_117" value="" data-condition="`#tfa_109`" title="Website:" class=""></div>
        </div>
        <div class="oneField field-container-D    " id="tfa_115-D">
          <label id="tfa_115-L" class="label preField " for="tfa_115">Organization name:</label><div class="inputWrapper"><input type="text" id="tfa_115" name="tfa_115" value="" data-condition="`#tfa_109`" title="Organization name:" class=""></div>
        </div>
        <div class="oneField field-container-D    " id="tfa_114-D">
          <label id="tfa_114-L" class="label preField " for="tfa_114">Please describe:</label><div class="inputWrapper"><textarea id="tfa_114" name="tfa_114" data-condition="`#tfa_110` OR `#tfa_109`" title="Please describe:" class=""></textarea></div>
        </div>
        <div class="oneField field-container-D    " id="tfa_113-D">
          <label id="tfa_113-L" class="label preField " for="tfa_113">Please describe:</label><div class="inputWrapper"><input type="text" id="tfa_113" name="tfa_113" value="" data-condition="`#tfa_112`" title="Please describe:" class=""></div>
        </div>
        <div class="actions" id="4693583-A"><input type="submit" data-label="Submit" class="primaryAction" id="submit_button" value="Submit"></div>
        <div style="clear:both"></div>
        <input type="hidden" value="4693583" name="tfa_dbFormId" id="tfa_dbFormId"><input type="hidden" value="" name="tfa_dbResponseId" id="tfa_dbResponseId"><input type="hidden" value="167a5b320d12d0dd27a0c77c6826fc7b" name="tfa_dbControl" id="tfa_dbControl"><input type="hidden" value="38" name="tfa_dbVersionId" id="tfa_dbVersionId"><input type="hidden" value="" name="tfa_switchedoff" id="tfa_switchedoff">
      </form>
    </div></div><div class="wFormFooter"><p class="supportInfo"><br></p></div>
  <p class="supportInfo" >


  </p>

</div>
<script>
  var els = document.getElementsByTagName('input');
  for (var i=0; i < els.length; i++) {
    var place = els[i].getAttribute('title')
    els[i].setAttribute('placeholder', place);
  }

  window.onbeforeunload = function(event) {

    window.parent.alert('unloading');
    event.preventDefault();
  }
</script>
</body>
