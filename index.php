<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>

<body>
    <header class="assessment__header">
        <img src="https://assets-global.website-files.com/64d3ae166ba41c22963561b4/64d3b0066bc31c6db4802034_Favicon.svg" loading="lazy" alt />
    </header>
    <div class="form-block-2 w-form">
        <form action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> method="post" id="email-form" class="form-width">

            <section class="choose-assesment-type">
                <div class="w-layout-blockcontainer container cat w-container">
                    <div class="cat_wrapper">
                        <div class="cat_blocks_wrapper">
                            <div class="cat_block">
                                <img src="https://assets-global.website-files.com/64d3ae166ba41c22963561b4/650c5db8d1fa29269af3a394_Select%20your%20test%201.svg" loading="lazy" alt class="cat_image" />
                                <h2 class="h3">Online Assessment</h2>
                                <p class="cat_text">
                                    Complete our online quiz to determine your eligibility for
                                    the program, after which our team will review your
                                    submission. Rest assured, if your application is declined,
                                    you will receive a full refund.
                                </p>
                                <a data-w-id="62da6023-02fc-5450-8a07-ec167a81cc58" href="#" class="button-with-arrow cat w-inline-block click">
                                    <div class="button__text">Start Online Assessment</div>
                                    <img src="https://assets-global.website-files.com/64d3ae166ba41c22963561b4/64d3b555052a3f97031c528f_Arrow.svg" loading="lazy" alt />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-fixed---asses age">
                <div class="w-layout-blockcontainer container w-container">
                    <div class="assessment__content-wrapper">
                        <div class="form-content-wrapper">
                            <h2 class="assess-question">
                                Do you agree and consent to the following?
                            </h2>
                            <ul role="list" class="list">
                                <li>I am over 18 and live in the UK</li>
                                <li>
                                    I will be sole user of any medication offered to me through
                                    this service
                                </li>
                                <li>
                                    I confirm that all answers provided by me are entirely
                                    truthful and accurate.
                                </li>
                            </ul>
                            <a data-w-id="f09cd2f1-32b2-dfbb-1e7a-664816db4742" href="#" class="button-with-arrow-2 w-inline-block">
                                <div class="button__text">Yes</div>
                                <img loading="lazy" src="https://assets-global.website-files.com/64d3ae166ba41c22963561b4/64d3b555052a3f97031c528f_Arrow.svg" alt />
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-fixed---asses q2">
                <div class="w-layout-blockcontainer container w-container">
                    <div class="assessment__content-wrapper">
                        <div class="form-content-wrapper">
                            <h2>What ethnicity are you?</h2>
                            <div class="radio-buttons-wrapper-2">
                                <label class="radio-button-field w-radio">
                                    <input id="Asian-or-Asian-British" type="radio" name="Ethnicity" data-name="Ethnicity" style="opacity: 0; position: absolute; z-index: -1" value="Asian or Asian British" />
                                    <div class="w-form-formradioinput w-form-formradioinput--inputType-custom radio-button-2 w-radio-input"></div>
                                    <span class="radio-button-label w-form-label" for="Asian-or-Asian-British">Asian or Asian British</span>
                                </label>
                                <label class="radio-button-field w-radio">
                                    <input id="Black-Black-British-Caribbean-or-African" type="radio" name="Ethnicity" data-name="Ethnicity" style="opacity: 0; position: absolute; z-index: -1" value="Black, Black British,  Caribbean, or African" />
                                    <div class="w-form-formradioinput w-form-formradioinput--inputType-custom radio-button-2 w-radio-input"></div>

                                    <span class="radio-button-label w-form-label" for="Black-Black-British-Caribbean-or-African">Black, Black British,  Caribbean, or African</span>
                                </label>
                                <label class="radio-button-field w-radio">
                                    <input id="White" type="radio" name="Ethnicity" data-name="Ethnicity" style="opacity: 0; position: absolute; z-index: -1" value="White" />
                                    <div class="w-form-formradioinput w-form-formradioinput--inputType-custom radio-button-2 w-radio-input"></div>

                                    <span class="radio-button-label w-form-label" for="White">White</span>
                                </label>
                                <label class="radio-button-field w-radio">
                                    <input id="Mixed" type="radio" name="Ethnicity" data-name="Ethnicity" style="opacity: 0; position: absolute; z-index: -1" value="Mixed" />
                                    <div class="w-form-formradioinput w-form-formradioinput--inputType-custom radio-button-2 w-radio-input"></div>

                                    <span class="radio-button-label w-form-label" for="Mixed">Mixed</span>
                                </label>
                                <label class="radio-button-field w-radio">
                                    <input id="Arab" type="radio" name="Ethnicity" data-name="Ethnicity" style="opacity: 0; position: absolute; z-index: -1" value="Arab" />
                                    <div class="w-form-formradioinput w-form-formradioinput--inputType-custom radio-button-2 w-radio-input"></div>

                                    <span class="radio-button-label w-form-label" for="Arab">Arab</span>
                                </label>
                                <label class="radio-button-field w-radio">
                                    <input id="Other" type="radio" name="Ethnicity" data-name="Ethnicity" style="opacity: 0; position: absolute; z-index: -1" value="Other" />
                                    <div class="w-form-formradioinput w-form-formradioinput--inputType-custom radio-button-2 w-radio-input"></div>

                                    <span class="radio-button-label w-form-label" for="Other">Other</span>
                                </label>
                                <label class="radio-button-field w-radio">
                                    <input id="Prefer-not-to-say" type="radio" name="Ethnicity" data-name="Ethnicity" style="opacity: 0; position: absolute; z-index: -1" value="Prefer not to say" checked />
                                    <div class="w-form-formradioinput w-form-formradioinput--inputType-custom radio-button-2 w-radio-input"></div>

                                    <span class="radio-button-label w-form-label" for="Prefer-not-to-say">Prefer not to say</span>
                                </label>
                            </div>
                            <a bind="1ffd0041-025f-6b0f-c107-5a5a6500ec1e" href="#" class="dummy-button-q1 align-right w-button">Next</a>
                            <a bind="8a2fc58b-6984-837f-24f5-8b5573bb4ab6" data-w-id="8a2fc58b-6984-837f-24f5-8b5573bb4ab6" href="#" class="button-2 align-right question1 w-button">Next</a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-fixed---asses q3-1">
                <div class="w-layout-blockcontainer container w-container">
                    <div class="assessment__content-wrapper">
                        <div class="form-content-wrapper">
                            <h1 class="h2-2 assessment-question">
                                What sex were you assigned at birth?
                            </h1>
                            <div class="radio-buttons-wrapper-3">
                                <label class="radio-button-field w-radio">
                                    <input id="Male" type="radio" name="gender" data-name="gender" style="opacity: 0; position: absolute; z-index: -1" value="Male" checked />
                                    <div class="w-form-formradioinput w-form-formradioinput--inputType-custom radio-button-3 w-radio-input"></div>

                                    <span class="radio-button-label w-form-label" for="Male">Male</span>
                                </label>
                                <label class="radio-button-field w-radio">
                                    <input id="Female" type="radio" name="gender" data-name="gender" style="opacity: 0; position: absolute; z-index: -1" value="Female" />
                                    <div class="w-form-formradioinput w-form-formradioinput--inputType-custom radio-button-3 w-radio-input"></div>

                                    <span class="radio-button-label w-form-label" for="Female">Female</span>
                                </label>
                            </div>
                            <div class="assess-buttons">
                                <a href="#" class="assess-back w-inline-block">
                                    <img loading="lazy" src="https://assets-global.website-files.com/64d3ae166ba41c22963561b4/64e757f2ee448f472ab1c437_arrow-left.svg" alt />
                                    <div class="button__text">Back</div>
                                </a>
                                <a data-w-id="494ec9e3-f2e3-c13f-406c-3ea8ea9f8328" href="#" class="button-2 back-button w-button">Back</a>
                                <a bind="0a99ad6a-dfa5-e404-473e-f974fe16a4ec" href="#" class="dummy-button-q2 align-right w-button">Next</a>
                                <a bind="0a99ad6a-dfa5-e404-473e-f974fe16a4ee" href="#" class="button-2 align-right question2 w-button">Next</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-fixed---asses q3-2">
                <div class="w-layout-blockcontainer container w-container">
                    <div class="assessment__content-wrapper">
                        <div class="form-content-wrapper">
                            <h2 class="assess-question">
                                Are you currently pregnant, trying to get pregnant, or
                                breastfeeding?
                            </h2>
                            <div class="radio-buttons-wrapper-3">
                                <label class="radio-button-field w-radio">
                                    <input id="radio-2" type="radio" name="pregnant" data-name="pregnant" style="opacity: 0; position: absolute; z-index: -1" value="yes" />
                                    <div class="w-form-formradioinput w-form-formradioinput--inputType-custom radio-button-3 w-radio-input"></div>

                                    <span class="radio-button-label w-form-label" for="radio-2">Yes</span>
                                </label>
                                <label class="radio-button-field w-radio">
                                    <input id="radio" type="radio" name="pregnant" data-name="pregnant" style="opacity: 0; position: absolute; z-index: -1" value="no" checked />
                                    <div class="w-form-formradioinput w-form-formradioinput--inputType-custom radio-button-3 w-radio-input"></div>

                                    <span class="radio-button-label w-form-label" for="radio">No</span>
                                </label>
                            </div>
                            <div class="assess-buttons">
                                <a data-w-id="28612375-3d47-2712-acb7-ba9f6797dd40" href="#" class="button-2 back-button w-button">Back</a>
                                <a bind="fa068688-3d73-2d13-aa5d-162100934263" href="#" class="button-2 align-right question3 w-button">Next</a>
                                <a bind="8c3f79b1-d38e-a276-b8cd-b24bef37d7c1" href="#" class="dummy-button-q3 align-right w-button">Next</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-fixed---asses q-dob">
                <div class="w-layout-blockcontainer container w-container">
                    <div class="assessment__content-wrapper">
                        <div class="form-content-wrapper">
                            <h2 class="assess-question">What is your Date of Birth?</h2>
                            <div id="height_weight_measure" class="form-2">
                                <input class="text-field-4 w-input" max="31" maxlength="2" name="dob_date" data-name="dob_date" pattern="\d{2}" min="01" value="01" placeholder="DD" type="number" id="dob_date" />
                                <input class="text-field-5 w-input" max="12" maxlength="2" name="dob_month" data-name="dob_month" pattern="\d{2}" min="01" placeholder="MM" type="number" value="12" id="dob_month" />
                                <input class="text-field-6 w-input" max="2010" maxlength="4" name="dob_year" data-name="dob_year" pattern="\d{4}" min="1900" placeholder="YYYY" type="number" id="dob_year" value="2000" />
                            </div>
                            <div class="assess-buttons">
                                <a href="#" class="button-2 back-button back-button-q4 w-button">Back</a>
                                <a bind="84ce39af-53a7-6aca-1ed5-71f905886fe0" href="#" class="dummy-button-q-dob align-right w-button">Next</a>
                                <a bind="05c1f0e3-c512-3987-8cc3-16d5053eea35" data-w-id="05c1f0e3-c512-3987-8cc3-16d5053eea35" href="#" class="button-2 align-right question-dob w-button">Next</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-fixed---asses q4">
                <div class="w-layout-blockcontainer container w-container">
                    <div class="assessment__content-wrapper">
                        <div class="form-content-wrapper">
                            <div id="height_weight_measure" class="height-weight-wrapper">
                                <h2 class="assess-question">
                                    What is your height &amp;weight?
                                </h2>
                                <div class="kg-cm-wrapper body_measure">
                                    <div class="field-label-text-field kg">
                                        <label for="height_cm-3" class="form-label">Height</label>
                                        <input class="text-field height_n_weight w-input" maxlength="256" name="height_cm" data-name="height_cm" placeholder="cm" type="number" id="height_cm-3" value="100" />
                                    </div>
                                    <div class="field-label-text-field cm">
                                        <label for="weight_kg" class="form-label">Weight</label>
                                        <input class="text-field height_n_weight w-input" maxlength="256" name="weight_kg" data-name="weight_kg" placeholder="Kg" type="number" id="weight_kg" value="50" />
                                    </div>
                                </div>
                                <div class="stone-feet-wrapper body_measure">
                                    <div class="field-label-text-field feet">
                                        <label for="Weight---Kg-2" class="form-label">Weight</label>
                                    </div>
                                    <div data-w-id="8f36a8a8-1920-bd22-26d0-d4ae72b989cc" class="radio-buttons-wrapper switch">
                                        <div class="switch-link">Switch to metric (cm, kg)</div>
                                    </div>
                                </div>
                            </div>
                            <div class="assess-buttons">
                                <a href="#" class="button-2 back-button back-button-q4 w-button">Back</a>
                                <a bind="84ce39af-53a7-6aca-1ed5-71f905886fe0" href="#" class="dummy-button-q4 align-right w-button">Next</a>
                                <a bind="05c1f0e3-c512-3987-8cc3-16d5053eea35" data-w-id="ac8b2f0b-9ae0-df59-f659-28320655190f" href="#" class="button-2 align-right question4 w-button">Next</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-fixed---asses q6">
                <div class="w-layout-blockcontainer container w-container">
                    <div class="assessment__content-wrapper">
                        <div class="form-content-wrapper">
                            <h2 class="assess-question">
                                Have you been diagnosed with diabetes?
                            </h2>
                            <div class="radio-buttons-wrapper-3">
                                <label class="radio-button-field w-radio">
                                    <input id="I-have-diabetes-and-take-medication-for-it" type="radio" name="diabetes" data-name="diabetes" style="opacity: 0; position: absolute; z-index: -1" value="I have diabetes and take medication for it" />
                                    <div class="w-form-formradioinput w-form-formradioinput--inputType-custom radio-button-3 w-radio-input"></div>

                                    <span class="radio-button-label w-form-label" for="I-have-diabetes-and-take-medication-for-it">I have diabetes and take medication for it</span>
                                </label>
                                <label class="radio-button-field w-radio">
                                    <input id="I-have-diabetes-and-it-s-diet-controlled" type="radio" name="diabetes" data-name="diabetes" style="opacity: 0; position: absolute; z-index: -1" value="I have diabetes and it&#x27;s diet controlled" />
                                    <div class="w-form-formradioinput w-form-formradioinput--inputType-custom radio-button-3 w-radio-input"></div>

                                    <span class="radio-button-label w-form-label" for="I-have-diabetes-and-it-s-diet-controlled">I have diabetes and it &#x27;s diet controlled</span>
                                </label>
                                <label class="radio-button-field w-radio">
                                    <input id="I-don-t-have-diabetes" type="radio" name="diabetes" data-name="diabetes" style="opacity: 0; position: absolute; z-index: -1" value="I don&#x27;t have diabetes" checked />
                                    <div class="w-form-formradioinput w-form-formradioinput--inputType-custom radio-button-3 w-radio-input"></div>

                                    <span class="radio-button-label w-form-label" for="I-don-t-have-diabetes">I don &#x27;t have diabetes</span>
                                </label>
                            </div>
                            <div class="assess-buttons">
                                <a data-w-id="78742782-7b13-8eaa-6ef1-9992893f714b" href="#" class="button-2 back-button w-button">Back</a>
                                <a bind="7c717d35-fc3d-a855-30bc-2dd7c24fe0a3" href="#" class="dummy-button-q5 align-right w-button">Next</a>
                                <a bind="1ad9433b-6ff5-f3a2-7400-5fd626358c7b" data-w-id="1ad9433b-6ff5-f3a2-7400-5fd626358c7b" href="#" class="button-2 align-right qustion5 w-button">Next</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-fixed---asses q7">
                <div class="w-layout-blockcontainer container w-container">
                    <div class="assessment__content-wrapper">
                        <div class="form-content-wrapper assessment">
                            <h2 class="assess-question">
                                Do you suffer from any of the following?
                            </h2>
                            <div id="multiple_disease" class="checkboxes---wrapper">
                                <label class="w-checkbox checkbox-field">
                                    <input id="Do-Any-Of-The-Following-Statements-Apply-To-You-These-Conditions-Can-Lead-To-Serious-Complications-When-Losing-Weight-Or-Taking-Weight-Loss-Medications-3" type="checkbox" name="chronic_diseases" data-name="Do Any Of The Following Statements Apply To You These Conditions Can Lead To Serious Complications When Losing Weight Or Taking Weight Loss Medications 3" style="opacity: 0; position: absolute; z-index: -1" value="Liver, kidney or heart failure" />
                                    <div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox"></div>

                                    <span class="form-label w-form-label" for="Do-Any-Of-The-Following-Statements-Apply-To-You-These-Conditions-Can-Lead-To-Serious-Complications-When-Losing-Weight-Or-Taking-Weight-Loss-Medications-3">Liver, kidney or heart failure</span>
                                </label>
                                <label class="w-checkbox checkbox-field">
                                    <input id="I-M-Currently-Being-Treated-For-Cancer-3" type="checkbox" name="chronic_diseases" data-name="I M Currently Being Treated For Cancer 3" style="opacity: 0; position: absolute; z-index: -1" value="Pancreatitis" />
                                    <div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox"></div>

                                    <span class="form-label w-form-label" for="I-M-Currently-Being-Treated-For-Cancer-3">Pancreatitis</span>
                                </label>
                                <label class="w-checkbox checkbox-field">
                                    <input id="I-have-end-stage-kidney-disease-3" type="checkbox" name="chronic_diseases" data-name="I Have End Stage Kidney Disease 3" style="opacity: 0; position: absolute; z-index: -1" value="Multiple endocrine neoplasia type 2" />
                                    <div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox"></div>

                                    <span class="form-label w-form-label" for="I-have-end-stage-kidney-disease-3">Multiple endocrine neoplasia type 2</span>
                                </label>
                                <label class="w-checkbox checkbox-field">
                                    <input id="I-have-severe-liver-impairment" type="checkbox" name="chronic_diseases" data-name="I Have Severe Liver Impairment" style="opacity: 0; position: absolute; z-index: -1" value="Cancer" />
                                    <div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox"></div>

                                    <span class="form-label w-form-label" for="I-have-severe-liver-impairment">Cancer</span>
                                </label>
                                <label class="w-checkbox checkbox-field">
                                    <input id="I-have-severe-heart-failure" type="checkbox" name="chronic_diseases" data-name="I Have Severe Heart Failure" style="opacity: 0; position: absolute; z-index: -1" value="Type 1 diabetic retinopathy" />
                                    <div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox"></div>

                                    <span class="form-label w-form-label" for="I-have-severe-heart-failure">Type 1 diabetic retinopathy</span>
                                </label>
                                <label class="w-checkbox checkbox-field">
                                    <input id="I-have-a-history-of-pancreatitis" type="checkbox" name="chronic_diseases" data-name="I Have A History Of Pancreatitis" style="opacity: 0; position: absolute; z-index: -1" value="Personal or family history of medullary thyroid cancer" />
                                    <div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox"></div>

                                    <span class="form-label w-form-label" for="I-have-a-history-of-pancreatitis">Personal or family history of medullary thyroid
                                        cancer</span>
                                </label>
                                <label class="w-checkbox checkbox-field">
                                    <input id="I-have-had-a-bariatric-operation-such-as-a-gastric-band-or-sleeve-surgery" type="checkbox" name="chronic_diseases" data-name="I Have Had A Bariatric Operation Such As A Gastric Band Or Sleeve Surgery" style="opacity: 0; position: absolute; z-index: -1" value="History of an eating disorder (e.g anorexia, bulimia)" />
                                    <div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox"></div>

                                    <span class="form-label w-form-label" for="I-have-had-a-bariatric-operation-such-as-a-gastric-band-or-sleeve-surgery">History of an eating disorder (e.g anorexia,
                                        bulimia)</span>
                                </label>
                                <label class="w-checkbox checkbox-field">
                                    <input id="I-have-had-a-bariatric-operation-such-as-a-gastric-band-or-sleeve-surgery-3" type="checkbox" name="chronic_diseases" data-name="I Have Had A Bariatric Operation Such As A Gastric Band Or Sleeve Surgery 3" style="opacity: 0; position: absolute; z-index: -1" value="History of gallbladder problems" />
                                    <div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox"></div>

                                    <span class="form-label w-form-label" for="I-have-had-a-bariatric-operation-such-as-a-gastric-band-or-sleeve-surgery-3">History of gallbladder problems</span>
                                </label>
                                <label class="w-checkbox checkbox-field">
                                    <input id="I-have-had-a-bariatric-operation-such-as-a-gastric-band-or-sleeve-surgery-2" type="checkbox" name="chronic_diseases" data-name="I Have Had A Bariatric Operation Such As A Gastric Band Or Sleeve Surgery 2" style="opacity: 0; position: absolute; z-index: -1" value="History of inflammatory bowel disease or gastroparesis" />
                                    <div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox"></div>

                                    <span class="form-label w-form-label" for="I-have-had-a-bariatric-operation-such-as-a-gastric-band-or-sleeve-surgery-2">History of inflammatory bowel disease or
                                        gastroparesis</span>
                                </label>
                                <label class="w-checkbox checkbox-field">
                                    <input id="checkbox-3" type="checkbox" name="chronic_diseases" data-name="Checkbox 3" data-value="none" style="opacity: 0; position: absolute; z-index: -1" value="None of these statements apply to me" checked />
                                    <div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox"></div>

                                    <span class="form-label w-form-label" for="checkbox-3">None of these statements apply to me</span>
                                </label>
                            </div>
                            <div class="assess-buttons">
                                <a data-w-id="338b15a6-1a3d-8da9-e28e-e72e5c5c086f" href="#" class="button-2 back-button w-button">Back</a>
                                <a bind="e7720a3e-6b3b-4e32-7b34-1adf182db489" href="#" class="dummy-button-q6 align-right w-button">Next</a>
                                <a bind="730cdd41-c30d-bc1f-6006-0037e966325e" data-w-id="730cdd41-c30d-bc1f-6006-0037e966325e" href="#" class="button-2 align-right question6 w-button">Next</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-fixed---asses q8">
                <div class="w-layout-blockcontainer container w-container">
                    <div class="assessment__content-wrapper">
                        <div class="form-content-wrapper">
                            <div class="heading-subheading">
                                <h2 class="assess-question">
                                    Please list any other medical conditions you have.
                                </h2>
                                <p>
                                    Our clinicians need to know your full medical history to
                                    make sure treatment is safe for you to take.
                                </p>
                            </div>
                            <div class="field-label-text-field">
                                <p>Answer “none” if you don’t have any.</p>
                                <input class="text-field w-input" maxlength="256" name="medical_condition" data-name="medical_condition" placeholder="if nothing click next" type="text" id="medical_condition" value="none" />
                            </div>
                            <div class="assess-buttons">
                                <a data-w-id="b734eebb-e6e7-55c8-16af-9cd18c3c746d" href="#" class="button-2 back-button w-button">Back</a>
                                <a bind="136905c8-72f9-5fb9-4cf3-56ade1a22b99" href="#" class="dummy-button-q7 align-right w-button">Next</a>
                                <a bind="ad43d4af-cc5f-e461-5cf9-d3d03ae48672" data-w-id="ad43d4af-cc5f-e461-5cf9-d3d03ae48672" href="#" class="button-2 align-right question7 w-button">Next</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-fixed---asses q9">
                <div class="w-layout-blockcontainer container w-container">
                    <div class="assessment__content-wrapper">
                        <div class="form-content-wrapper">
                            <div>
                                <h2 class="assess-question">
                                    Do any of the following statements apply to you?
                                </h2>
                            </div>
                            <div class="checkboxes---wrapper">
                                <label class="w-checkbox checkbox-field">
                                    <input id="I-have-been-diagnosed-with-a-mental-health-condition-such-as-depression-or-anxiety" type="checkbox" name="spicial_statements" value="I have been diagnosed with a mental health condition such as depression or anxiety" data-name="I have been diagnosed with a mental health condition such as depression or anxiety" style="opacity: 0; position: absolute; z-index: -1" />
                                    <div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox"></div>

                                    <span class="form-label w-form-label" for="I-have-been-diagnosed-with-a-mental-health-condition-such-as-depression-or-anxiety">I have been diagnosed with a mental health condition such
                                        as depression or anxiety</span>
                                </label>
                                <label class="w-checkbox checkbox-field">
                                    <input id="I-have-or-have-an-eating-disorder-such-as-bulimia-anorexia-nervosa-or-a-binge-eating-disorder" type="checkbox" name="spicial_statements" value="I have or have an eating disorder such as bulimia, anorexia nervosa, or a binge eating disorder" data-name="I have or have an eating disorder such as bulimia, anorexia nervosa, or a binge eating disorder" style="opacity: 0; position: absolute; z-index: -1" />
                                    <div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox"></div>

                                    <span class="form-label w-form-label" for="I-have-or-have-an-eating-disorder-such-as-bulimia-anorexia-nervosa-or-a-binge-eating-disorder">I have or have an eating disorder such as bulimia,
                                        anorexia nervosa, or a binge eating disorder</span>
                                </label>
                                <label class="w-checkbox checkbox-field">
                                    <input id="None-of-these-statements-apply-to-me" type="checkbox" name="spicial_statements" data-name="None of these statements apply to me" value="None of these statements apply to me" style="opacity: 0; position: absolute; z-index: -1" checked />
                                    <div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox"></div>

                                    <span class="form-label w-form-label" for="None-of-these-statements-apply-to-me">None of these statements apply to me</span>
                                </label>
                            </div>
                            <div class="assess-buttons">
                                <a data-w-id="409fe31a-cc9f-e5aa-fb16-62429d06c5b6" href="#" class="button-2 back-button w-button">Back</a>
                                <a bind="8f981748-3d28-be1c-4243-916bf7ad1432" href="#" class="dummy-button-q8 align-right w-button">Next</a>
                                <a bind="67c44cd4-898c-290f-730d-77a32748cde1" data-w-id="67c44cd4-898c-290f-730d-77a32748cde1" href="#" class="button-2 align-right question8 w-button">Next</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-fixed---asses q11">
                <div class="w-layout-blockcontainer container w-container">
                    <div class="assessment__content-wrapper">
                        <div class="form-content-wrapper">
                            <div>
                                <h2 class="assess-question">
                                    Have you ever taken any of the following medications to help
                                    you lose weight?
                                </h2>
                            </div>
                            <div id="question10" class="checkboxes---wrapper">
                                <label class="w-checkbox checkbox-field">
                                    <input id="Ozempic" type="checkbox" name="medications_taken_for_lose_weight" value="Ozempic" style="opacity: 0; position: absolute; z-index: -1" />
                                    <div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox"></div>

                                    <span class="form-label w-form-label" for="Ozempic">Ozempic</span>
                                </label>
                                <label class="w-checkbox checkbox-field">
                                    <input id="Saxenda" type="checkbox" name="medications_taken_for_lose_weight" value="Saxenda" style="opacity: 0; position: absolute; z-index: -1" />
                                    <div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox"></div>

                                    <span class="form-label w-form-label" for="Saxenda">Saxenda</span>
                                </label>
                                <label class="w-checkbox checkbox-field">
                                    <input id="My-Simba" type="checkbox" name="medications_taken_for_lose_weight" data-name="My Simba" style="opacity: 0; position: absolute; z-index: -1" value="My Simba" />
                                    <div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox"></div>

                                    <span class="form-label w-form-label" for="My-Simba">My Simba</span>
                                </label>
                                <label class="w-checkbox checkbox-field">
                                    <input id="Other" type="checkbox" name="medications_taken_for_lose_weight" style="opacity: 0; position: absolute; z-index: -1" value="Other" />
                                    <div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox"></div>

                                    <span class="form-label w-form-label" for="Other">Other</span>
                                </label>
                                <label class="w-checkbox checkbox-field">
                                    <input id="I-have-never-taken-medication-to-lose-weight" type="checkbox" name="medications_taken_for_lose_weight" style="opacity: 0; position: absolute; z-index: -1" value="I have never taken medication to lose weight" checked />
                                    <div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox"></div>

                                    <span class="form-label w-form-label" for="I-have-never-taken-medication-to-lose-weight">I have never taken medication to lose weight</span>
                                </label>
                            </div>
                            <div class="assess-buttons">
                                <a bind="95287743-8ac7-1364-9ee5-42cfded04ec7" href="#" class="dummy-button-q10 align-right w-button">Next</a>
                                <a bind="5d18b79f-a0a1-5e2e-dfb4-503861a16e16" data-w-id="5d18b79f-a0a1-5e2e-dfb4-503861a16e16" href="#" class="button-2 align-right question10 w-button">Next</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="weight_loss" class="section-fixed---asses q20">
                <div class="w-layout-blockcontainer container w-container">
                    <div class="assessment__content-wrapper">
                        <div class="form-content-wrapper">
                            <h2 class="assess-question">
                                Have you ever used any other medications to aid in weight
                                loss?
                            </h2>
                            <div class="radio-buttons-wrapper-3">
                                <label class="radio-button-field w-radio">
                                    <input id="radio-2" type="radio" name="weight_loss" data-name="weight_loss" style="opacity: 0; position: absolute; z-index: -1" value="yes" />
                                    <div class="w-form-formradioinput w-form-formradioinput--inputType-custom radio-button-3 w-radio-input"></div>

                                    <span class="radio-button-label w-form-label" for="radio-2">Yes</span>
                                </label>
                                <label class="radio-button-field w-radio">
                                    <input id="radio" type="radio" name="weight_loss" data-name="weight_loss" style="opacity: 0; position: absolute; z-index: -1" value="no" />
                                    <div class="w-form-formradioinput w-form-formradioinput--inputType-custom radio-button-3 w-radio-input"></div>

                                    <span class="radio-button-label w-form-label" for="radio">No</span>
                                </label>
                            </div>
                            <div class="assess-buttons">
                                <a data-w-id="45f1c277-0b4c-ec92-4177-b0a9152af98d" href="#" class="button-2 back-button w-button">Back</a>
                                <a bind="250d4585-d932-e64b-fb38-fbc20de77340" href="#" class="dummy-button-q20 align-right w-button">Next</a>
                                <a bind="7e72642f-4e9a-0c48-8d03-0abb606507a6" data-w-id="7e72642f-4e9a-0c48-8d03-0abb606507a6" style="opacity: 1" href="#" class="button-2 align-right question20 w-button">Next</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-fixed---asses q12">
                <div class="w-layout-blockcontainer container w-container">
                    <div class="assessment__content-wrapper">
                        <div class="form-content-wrapper">
                            <h2 class="assess-question">
                                Are you presently taking this medication?
                            </h2>
                            <div class="radio-buttons-wrapper-3">
                                <label class="radio-button-field w-radio">
                                    <input id="yes" type="radio" name="presently_medication" data-name="presently_medication" style="opacity: 0; position: absolute; z-index: -1" value="yes" />
                                    <div class="w-form-formradioinput w-form-formradioinput--inputType-custom radio-button-3 w-radio-input"></div>

                                    <span class="radio-button-label w-form-label" for="yes">Yes</span>
                                </label>
                                <label class="radio-button-field w-radio">
                                    <input id="no" type="radio" name="presently_medication" data-name="presently_medication" style="opacity: 0; position: absolute; z-index: -1" value="no" checked />
                                    <div class="w-form-formradioinput w-form-formradioinput--inputType-custom radio-button-3 w-radio-input"></div>

                                    <span class="radio-button-label w-form-label" for="no">No</span>
                                </label>
                            </div>
                            <div class="assess-buttons">
                                <a data-w-id="ed3281b5-440e-59ff-f0cf-63ff00020d6a" href="#" class="button-2 back-button w-button">Back</a>
                                <a bind="568c684b-f074-48fb-1768-386eadef60d2" href="#" class="dummy-button-q11 align-right w-button">Next</a>
                                <a bind="f0480358-fc35-0d36-7aec-4e245ab1908f" href="#" class="button-2 align-right question11 w-button">Next</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-fixed---asses q13-2">
                <div class="w-layout-blockcontainer container w-container">
                    <div class="assessment__content-wrapper">
                        <div class="form-content-wrapper">
                            <div class="height-weight-wrapper">
                                <h2 class="assess-question">
                                    How did you respond to the medication, and what led you to
                                    discontinue its use?
                                </h2>
                                <div class="field-label-text-field">
                                    <textarea id="medication_respond" name="medication_respond" maxlength="5000" data-name="medication_respond" placeholder="Write your answer here(if don't take a medication don't write anything)" class="text-field w-input"></textarea>
                                </div>
                            </div>
                            <div class="assess-buttons">
                                <a data-w-id="0d2316f8-f3f2-76e0-ed07-e209d23bc441" href="#" class="button-2 back-button w-button">Back</a>
                                <a bind="e0b0d198-c464-d729-421b-af3abf8c093a" href="#" class="dummy-button-q13 align-right w-button">Next</a>
                                <a bind="bec5d703-3fb5-0479-fab0-2ba19484af5e" data-w-id="bec5d703-3fb5-0479-fab0-2ba19484af5e" href="#" class="button-2 align-right question13 w-button">Next</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-fixed---asses q14">
                <div class="w-layout-blockcontainer container w-container">
                    <div class="assessment__content-wrapper">
                        <div class="form-content-wrapper">
                            <div>
                                <h2 class="assess-question">
                                    Please indicate whether you are presently using any
                                    medication, such as prescription drugs, over-the-counter
                                    medications, or supplements, by selecting all that are
                                    applicable to you.
                                </h2>
                            </div>
                            <div class="radio-buttons-wrapper-3">
                                <label class="radio-button-field w-radio">
                                    <input id="I-m-on-Levothyroxine-or-Warfarin-2" type="radio" name="counter_medications" data-name="counter_medications" style="opacity: 0; position: absolute; z-index: -1" value="I&#x27;m on Levothyroxine or Warfarin" />
                                    <div class="w-form-formradioinput w-form-formradioinput--inputType-custom radio-button-3 w-radio-input"></div>

                                    <span class="form-label w-form-label" for="I-m-on-Levothyroxine-or-Warfarin-2">I &#x27;m on Levothyroxine or Warfarin</span>
                                </label>
                                <label class="radio-button-field w-radio">
                                    <input id="Other-I-take-more-than-one-prescription-medication-if-so-please-list-all-medication-that-you-currently-take" type="radio" name="counter_medications" data-name="counter_medications" style="opacity: 0; position: absolute; z-index: -1" value="Other/ I take more than one prescription medication(if so, please list all medication that you currently take)" />
                                    <div class="w-form-formradioinput w-form-formradioinput--inputType-custom radio-button-3 w-radio-input"></div>

                                    <span class="form-label w-form-label" for="Other-I-take-more-than-one-prescription-medication-if-so-please-list-all-medication-that-you-currently-take">
                                        Other/ I take more than one prescription medication<br />(if
                                        so, please list all medication that you currently take)
                                    </span>
                                </label>
                                <label class="radio-button-field w-radio">
                                    <input id="I-don-t-take-any-medication" type="radio" name="counter_medications" data-name="counter_medications" style="opacity: 0; position: absolute; z-index: -1" value="I don't take any medication" checked />
                                    <div class="w-form-formradioinput w-form-formradioinput--inputType-custom radio-button-3 w-radio-input"></div>

                                    <span class="form-label w-form-label" for="I-don-t-take-any-medication">I don &#x27;t take any medication</span>
                                </label>
                            </div>
                            <div class="assess-buttons">
                                <a href="#" class="button-2 back-button back-button-q14 w-button">Back</a>
                                <a bind="5d302563-a758-49ed-46a9-52420850e1de" href="#" class="dummy-button-q14 align-right w-button">Next</a>
                                <a bind="ae63c861-0cd3-15a7-6c37-89a9e279684f" data-w-id="ae63c861-0cd3-15a7-6c37-89a9e279684f" href="#" class="button-2 align-right question14 w-button">Next</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-fixed---asses q15">
                <div class="w-layout-blockcontainer container w-container">
                    <div class="assessment__content-wrapper">
                        <div class="form-content-wrapper">
                            <div class="height-weight-wrapper">
                                <h2 class="assess-question">
                                    Please list all prescription medication that you currently
                                    take
                                </h2>
                                <div class="field-label-text-field">
                                    <textarea id="prescription_medication" name="prescription_medication" maxlength="5000" data-name="prescription_medication" placeholder="Write your answer here" class="text-field w-input"></textarea>
                                </div>
                            </div>
                            <div class="assess-buttons">
                                <a data-w-id="a34a1f01-dba8-aa6d-8b57-be2fd0f73844" href="#" class="button-2 back-button w-button">Back</a>
                                <a href="#" class="assess-back w-inline-block">
                                    <img loading="lazy" src="https://assets-global.website-files.com/64d3ae166ba41c22963561b4/64e757f2ee448f472ab1c437_arrow-left.svg" alt class="image-26" />
                                    <div class="button__text">Back</div>
                                </a>
                                <a bind="01ada941-8166-aa4b-8a67-5b4a6b7fa1e4" href="#" class="dummy-button-q15 align-right w-button">Next</a>
                                <a bind="61e2cb56-8d11-d44a-3f83-0d3fc96a4f39" data-w-id="61e2cb56-8d11-d44a-3f83-0d3fc96a4f39" href="#" class="button-2 align-right question15 w-button">Next</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-fixed---asses q16">
                <div class="w-layout-blockcontainer container w-container">
                    <div class="assessment__content-wrapper">
                        <div class="form-content-wrapper">
                            <h2 class="assess-question">
                                Have you taken Ozempic, Rybelsus, Wegovy or Saxenda medication
                                in the past 28 days?
                            </h2>
                            <div class="radio-buttons-wrapper-3">
                                <label class="radio-button-field w-radio">
                                    <input id="radio" type="radio" name="past_28" data-name="past_28" style="opacity: 0; position: absolute; z-index: -1" value="yes" />
                                    <div class="w-form-formradioinput w-form-formradioinput--inputType-custom radio-button-3 w-radio-input"></div>

                                    <span class="radio-button-label w-form-label" for="radio">Yes</span>
                                </label>
                                <label class="radio-button-field w-radio">
                                    <input id="radio-2" type="radio" name="past_28" data-name="past_28" style="opacity: 0; position: absolute; z-index: -1" value="no" checked />
                                    <div class="w-form-formradioinput w-form-formradioinput--inputType-custom radio-button-3 w-radio-input"></div>

                                    <span class="radio-button-label w-form-label" for="radio-2">No</span>
                                </label>
                            </div>
                            <div class="assess-buttons">
                                <a href="#" class="button-2 back-button back-button-q16 w-button">Back</a>
                                <a bind="a917b270-80b5-cd5a-ca9e-f294984ae386" href="#" class="dummy-button-q16 align-right w-button">Next</a>
                                <a bind="2c854254-1464-9cfb-0ed7-4d421209321a" href="#" class="button-2 align-right question16 w-button">Next</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-fixed---asses q18">
                <div class="w-layout-blockcontainer container w-container">
                    <div class="assessment__content-wrapper">
                        <div class="form-content-wrapper">
                            <div class="skipped-upload-images__text">
                                <h2 class="h2-2">
                                    Do you have any known allergies? If yes, please list them
                                    clearly in the space provided below. If you do not have any
                                    allergies, simply state &#x27;none &#x27;
                                </h2>
                            </div>
                            <div class="field-label-text-field">
                                <textarea id="allergies" name="allergies" maxlength="5000" data-name="allergies" placeholder="Write your answer here" class="text-field w-input"></textarea>
                            </div>
                            <div class="assess-buttons">
                                <a data-w-id="bd2138a6-79b9-8978-e25b-aa540fdbe76a" href="#" class="button-2 back-button back-button-q18 w-button">Back</a>
                                <a bind="1ae9a87e-ff52-0718-2b43-f1ce33202f70" href="#" class="dummy-button-q18 align-right w-button">Next</a>
                                <a bind="12a599b2-f3cf-09b8-c1c7-2ddace809ba1" data-w-id="12a599b2-f3cf-09b8-c1c7-2ddace809ba1" href="#" class="button-2 align-right question18 w-button">Next</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-fixed---asses q-gp-data-input">
                <div class="w-layout-blockcontainer container w-container">
                    <div class="assessment__content-wrapper">
                        <div class="form-content-wrapper">
                            <div class="heading-subheading">
                                <h2 class="assess-question-large">Share with GP</h2>
                                <p class="paragraph-5">
                                    We need some data from you to we can contact with you
                                </p>
                            </div>
                            <div class="w-layout-vflex share-gp_fields">
                                <div class="field-label-text-field small">
                                    <p>Your Name</p>
                                    <input class="text-field-7 _50px w-input" maxlength="256" name="name" type="text" />
                                </div>
                                <div class="field-label-text-field small">
                                    <p>Your Email Address</p>
                                    <input class="text-field-7 _50px w-input" maxlength="256" name="email" type="email" />
                                </div>
                                <div class="field-label-text-field small">
                                    <p>Your Phone Number(Optional)</p>
                                    <input class="text-field-7 _50px w-input" maxlength="14" name="number" value="000 000 000 000" type="tel" />
                                </div>
                                <div class="field-label-text-field small">
                                    <p>Your Address(Optional)</p>
                                    <textarea maxlength="5000" id="gp_address" name="address" class="text-area w-input">Write your address here</textarea>
                                </div>
                            </div>
                            <div class="assess-buttons">
                                <a data-w-id="664517cf-5d04-9c73-c1a1-18acfcd4c9e1" href="#" class="button-2 back-button back-button-q18 w-button">Back</a>
                                <a bind="1ae9a87e-ff52-0718-2b43-f1ce33202f70" href="#" class="dummy-button-q-gp align-right w-button">Next</a>
                                <a bind="12a599b2-f3cf-09b8-c1c7-2ddace809ba1" data-w-id="664517cf-5d04-9c73-c1a1-18acfcd4c9e5" href="#" class="button-2 align-right questiongp w-button">Next</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-fixed---asses _19-success">
                <div class="w-layout-blockcontainer container w-container">
                    <div class="content-wrapper-2">
                        <img src="https://assets-global.website-files.com/64d3ae166ba41c22963561b4/65493571b46e8dd1263f4859_Ellipse%2014.webp" loading="eager" sizes="100vw" srcset=" https://assets-global.website-files.com/64d3ae166ba41c22963561b4/65493571b46e8dd1263f4859_Ellipse%2014-p-500.webp 500w, https://assets-global.website-files.com/64d3ae166ba41c22963561b4/65493571b46e8dd1263f4859_Ellipse%2014.webp594w " alt class="image-36" />
                        <div class="heading-subheading congrats">
                            <div class="congratulations">Congratulations!</div>
                            <p class="success_text">
                                You are completing The assessment successfully.<br />
                            </p>
                            <div class="please-note">
                                please submit the data to receive it and contact you.
                            </div>
                        </div>
                        <img src="https://assets-global.website-files.com/64d3ae166ba41c22963561b4/64d3b555052a3f97031c528f_Arrow.svg" loading="lazy" alt />
                        <input type="submit" data-w-id="e750de1c-4216-e40f-0415-a4a48dc04b31" class="button-with-arrow-3 w-inline-block">

                    </div>
                </div>
            </section>
        </form>
    </div>
    <script src="index.js"></script>
</body>

</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Create the Variable
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $address = $_POST['address'];
    $Ethnicity = $_POST['Ethnicity'];
    $gender = $_POST['gender'];
    $pregnant = $_POST['pregnant'];
    $dob_date = $_POST['dob_date'];
    $dob_month = $_POST['dob_month'];
    $dob_year = $_POST['dob_year'];
    $height_cm = $_POST['height_cm'];
    $weight_kg = $_POST['weight_kg'];
    $diabetes = $_POST['diabetes'];
    $chronic_diseases = $_POST['chronic_diseases'];
    $medical_condition = htmlspecialchars($_POST['medical_condition']);
    $spicial_statements = $_POST['spicial_statements'];
    $medications_taken_for_lose_weight = $_POST['medications_taken_for_lose_weight'];
    $presently_medication = $_POST['presently_medication'] || "No Presently Medication";
    $medication_respond = htmlspecialchars($_POST['medication_respond']);
    $counter_medications = $_POST['counter_medications'] || "NO Medications";
    $prescription_medication = htmlspecialchars($_POST['prescription_medication']);
    $past_28 = $_POST['past_28'];
    $allergies = htmlspecialchars($_POST['allergies']);

    $msg = "the data is =><br>
            Name is: $name
            <br>Email is: $email 
            <br>phone number is: $number 
            <br>Address is: $address 
            Ethnicity is: $Ethnicity
            <br>Gender is: $gender
            <br>Pregnant is: $pregnant
            <br>Brith Day is: $dob_date / $dob_month / $dob_year
            <br>Height is: $height_cm cm
            <br>Weight is: $weight_kg kg
            <br>Diabetes is: $diabetes
            <br>Chronic diseases is: $chronic_diseases
            <br>Medical condition is: $medical_condition
            <br>Spicial statements is: $spicial_statements
            <br>Medications taken for lose weight is: $medications_taken_for_lose_weight
            <br>presently medication is: $presently_medication
            <br>Medication respond is: $medication_respond
            <br>Counter medications is: $counter_medications
            <br>Prescription medication is: $prescription_medication
            <br>Past 28 is: $past_28
            <br>Allergies is: $allergies
            <br>
            ";

    $myEmail = "alunlloyddavies@hotmail.com";
    $subject = "Assessment Online";
    $header = "From " . $email . "\r\n";

    echo $header;

    mail($myEmail, $subject, $msg, $header);
}
?>