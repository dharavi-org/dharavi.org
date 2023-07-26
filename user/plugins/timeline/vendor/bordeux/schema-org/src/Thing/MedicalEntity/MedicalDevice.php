<?php

namespace Bordeux\SchemaOrg\Thing\MedicalEntity;

/**
 * Generated by bordeux/schema
 *
 * @author Krzysztof Bednarczyk <schema@bordeux.net>
 * @link http://schema.org/MedicalDevice
 *
 *
 * -------------------------------- AdverseOutcome ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\MedicalEntity|\Bordeux\SchemaOrg\Thing\MedicalEntity[] adverseOutcome
 *
 * @method \Bordeux\SchemaOrg\Thing\MedicalEntity|\Bordeux\SchemaOrg\Thing\MedicalEntity[] getAdverseOutcome() A possible complication and/or side effect of this therapy. If it is known that an adverse outcome is serious (resulting in death, disability, or permanent damage; requiring hospitalization; or is otherwise life-threatening or requires immediate medical attention), tag it as a seriouseAdverseOutcome instead.
 *
 * @method MedicalDevice setAdverseOutcome(\Bordeux\SchemaOrg\Thing\MedicalEntity $adverseOutcome ) setAdverseOutcome(\Bordeux\SchemaOrg\Thing\MedicalEntity[] $adverseOutcome )A possible complication and/or side effect of this therapy. If it is known that an adverse outcome is serious (resulting in death, disability, or permanent damage; requiring hospitalization; or is otherwise life-threatening or requires immediate medical attention), tag it as a seriouseAdverseOutcome instead.
 *
 *
 * -------------------------------- Contraindication ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalContraindication|\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalContraindication[] contraindication
 *
 * @method \Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalContraindication|\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalContraindication[] getContraindication() A contraindication for this therapy.
 *
 * @method MedicalDevice setContraindication(\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalContraindication $contraindication ) setContraindication(\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalContraindication[] $contraindication )A contraindication for this therapy.
 *
 *
 * -------------------------------- Indication ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalIndication|\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalIndication[] indication
 *
 * @method \Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalIndication|\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalIndication[] getIndication() A factor that indicates use of this therapy for treatment and/or prevention of a condition, symptom, etc. For therapies such as drugs, indications can include both officially-approved indications as well as off-label uses. These can be distinguished by using the ApprovedIndication subtype of MedicalIndication.
 *
 * @method MedicalDevice setIndication(\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalIndication $indication ) setIndication(\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalIndication[] $indication )A factor that indicates use of this therapy for treatment and/or prevention of a condition, symptom, etc. For therapies such as drugs, indications can include both officially-approved indications as well as off-label uses. These can be distinguished by using the ApprovedIndication subtype of MedicalIndication.
 *
 *
 * -------------------------------- PostOp ---------------------------------------------
 *
 * @property string|string[] postOp
 *
 * @method string|string[] getPostOp() A description of the postoperative procedures, care, and/or followups for this device.
 *
 * @method MedicalDevice setPostOp(string $postOp ) setPostOp(string[] $postOp )A description of the postoperative procedures, care, and/or followups for this device.
 *
 *
 * -------------------------------- PreOp ---------------------------------------------
 *
 * @property string|string[] preOp
 *
 * @method string|string[] getPreOp() A description of the workup, testing, and other preparations required before implanting this device.
 *
 * @method MedicalDevice setPreOp(string $preOp ) setPreOp(string[] $preOp )A description of the workup, testing, and other preparations required before implanting this device.
 *
 *
 * -------------------------------- Procedure ---------------------------------------------
 *
 * @property string|string[] procedure
 *
 * @method string|string[] getProcedure() A description of the procedure involved in setting up, using, and/or installing the device.
 *
 * @method MedicalDevice setProcedure(string $procedure ) setProcedure(string[] $procedure )A description of the procedure involved in setting up, using, and/or installing the device.
 *
 *
 * -------------------------------- Purpose ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\\Thing|\Bordeux\SchemaOrg\\Thing[]|\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalDevicePurpose|\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalDevicePurpose[] purpose
 *
 * @method \Bordeux\SchemaOrg\\Thing|\Bordeux\SchemaOrg\\Thing[]|\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalDevicePurpose|\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalDevicePurpose[] getPurpose() A goal towards an action is taken. Can be concrete or abstract.
 *
 * @method MedicalDevice setPurpose(\Bordeux\SchemaOrg\\Thing $purpose ) setPurpose(\Bordeux\SchemaOrg\\Thing[] $purpose ) setPurpose(\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalDevicePurpose $purpose ) setPurpose(\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalDevicePurpose[] $purpose )A goal towards an action is taken. Can be concrete or abstract.
 *
 *
 * -------------------------------- SeriousAdverseOutcome ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\MedicalEntity|\Bordeux\SchemaOrg\Thing\MedicalEntity[] seriousAdverseOutcome
 *
 * @method \Bordeux\SchemaOrg\Thing\MedicalEntity|\Bordeux\SchemaOrg\Thing\MedicalEntity[] getSeriousAdverseOutcome() A possible serious complication and/or serious side effect of this therapy. Serious adverse outcomes include those that are life-threatening; result in death, disability, or permanent damage; require hospitalization or prolong existing hospitalization; cause congenital anomalies or birth defects; or jeopardize the patient and may require medical or surgical intervention to prevent one of the outcomes in this definition.
 *
 * @method MedicalDevice setSeriousAdverseOutcome(\Bordeux\SchemaOrg\Thing\MedicalEntity $seriousAdverseOutcome ) setSeriousAdverseOutcome(\Bordeux\SchemaOrg\Thing\MedicalEntity[] $seriousAdverseOutcome )A possible serious complication and/or serious side effect of this therapy. Serious adverse outcomes include those that are life-threatening; result in death, disability, or permanent damage; require hospitalization or prolong existing hospitalization; cause congenital anomalies or birth defects; or jeopardize the patient and may require medical or surgical intervention to prevent one of the outcomes in this definition.
 *
 *
 */
 class MedicalDevice extends \Bordeux\SchemaOrg\Thing\MedicalEntity {

 }