<div class="page-header">
	<h2>
		<?php echo AdHtml::iconFA('coffee', array('fw' => TRUE)); ?> Model Rules Validation
	</h2>
</div>

<section>
	<h3><?php echo AdHtml::iconFA('book', array('fw' => TRUE)); ?> How validation works</h3>
	<p>The CModel class uses a method named CModel::rules() to return an array with the rules for validation.</p>
	<?php $this->beginWidget('andystrap.widgets.AdHighlighter'); ?>
	public function rules()
	{
	    return array(
	        array('username, password', 'required'),
	        array('password_repeat', 'required', 'on'=>'register'),
	        array('password', 'compare', 'compareAttribute'=>'password_repeat', 'on'=>'register'),
	    );
	}
    <?php $this->endWidget(); ?>

	<section>
		<h4><?php echo AdHtml::iconFA('book', array('fw' => TRUE)); ?> Parameters of a validator</h4>

		<?php $this->beginWidget('andystrap.widgets.AdHighlighter'); ?>
		array(
		    // mandatory arguments
		    'attribute list', 
		    'validator name', 
		    // optional parameters
		    'on' => 'scenario name', 
		    'message' => 'The attribute didn\'t validate!', 
		    ...validation parameters...
		);
        <?php $this->endWidget(); ?>

		<ul class="list">
			<li>attribute list: specifies the attributes (separated by commas) to be validated.</li>
			<li>validator name: specifies the validator to be used. See the next section for details.</li>
			<li>on: this specifies the scenarios when the validation rule should be performed. Separate different scenarios with commas. If this option is not set, the rule will be applied in any scenario. See the section [Scenarios][#Scenarios] for details.</li>
			<li>message: replaces the default error message if validation fails.</li>
			<li>...validation parameters...: any number of extra parameters to be used by the specified validator.</li>
		</ul>

		<h4><?php echo AdHtml::iconFA('book', array('fw' => TRUE)); ?> Choice of validators</h4>

		<p>Yii will look for validators in the specific order:</p>

		<ol class="list">
			<li>A method in the model class with the same name as the validator specified.</li>
			<li>A built-in validator in Yii that extends the CValidator class.</li>
			<li>A path/alias to a home made class (extending CValidator) that is not built in.</li>
		</ol>

		<p>Here is an example of these 3 kinds:</p>

		<?php $this->beginWidget('andystrap.widgets.AdHighlighter'); ?>
		public function rules()
		{
		    return array(
		        array('password', 'validateLogin'), // Custom validation method in this object
		        array('username, password', 'required'), // built-in alias for CRequiredValidator
		        array('username', 'ext.MyValidators.MyLoginValidator'), // Custom validation class
		    );
		}

		public function validateLogin() {
		// [...]
		}
        <?php $this->endWidget(); ?>

		<h4><?php echo AdHtml::iconFA('book', array('fw' => TRUE)); ?> Scenarios</h4>

		<p>Each model object has a scenario property. Some scenarios are built-in and will be assigned automatically by Yii, but you can define your own.</p>
		<p>For instance, a CActiveRecord read from the database has the "update" scenario, while a new record has the "insert" scenario.</p>

		<?php $this->beginWidget('andystrap.widgets.AdHighlighter'); ?>
		$modelA = User::model()->findByPk(1); // $model->scenario = 'update'
		$modelB = new User();                 // $model->scenario = 'insert'
		$modelB->scenario = 'light';          // custom scenario
		if ($modelB->validate()) {            // will only apply rules of the "light" scenario
        <?php $this->endWidget(); ?>

		<p>As shown in the example of the first section, the rules can be restricted to a specific scenario through the "on" => "scenario" parameter.</p>

	</section>

</section>

<hr>

<section>

	<h3><?php echo AdHtml::iconFA('book', array('fw' => TRUE)); ?> Validation rules reference</h3>

	<p>For each rule, the list of its specific arguments is given with the eventual default value <em>(in italics)</em>.</p>

	<section>
	
		<h4><?php echo AdHtml::iconFA('book', array('fw' => TRUE)); ?> boolean : CBooleanValidator</h4>
		<p>Validates that the attribute value is either trueValue or falseValue.</p>
		<ol class="list">
			<li><strong>allowEmpty</strong>, whether the attribute value can be null or empty. <em>(true)</em></li>
			<li><strong>falseValue</strong>, the value representing false status. <em>(0)</em></li>
			<li><strong>strict</strong>, whether the comparison to trueValue and falseValue is strict. <em>(false)</em></li>
			<li><strong>trueValue</strong>, the value representing true status. <em>(1)</em></li>
		</ol>

		<h4><?php echo AdHtml::iconFA('book', array('fw' => TRUE)); ?> captcha : CCaptchaValidator</h4>
		<p>Validates that the attribute value is the same as the verification code displayed in the CAPTCHA.</p>
		<ol class="list">
			<li><strong>allowEmpty</strong>, whether the attribute value can be null or empty. <em>(false)</em></li>
			<li><strong>caseSensitive</strong>, whether the comparison is case sensitive. <em>(false)</em></li>
		</ol>

		<h4><?php echo AdHtml::iconFA('book', array('fw' => TRUE)); ?> compare : CCompareValidator</h4>
		<p>Compares the specified attribute value with another value and validates if they are equal.</p>
		<ol class="list">
			<li><strong>allowEmpty</strong>, whether the attribute value can be null or empty. <em>(false)</em></li>
			<li><strong>compareAttribute</strong>, the name of the attribute to be compared with.</li>
			<li><strong>compareValue</strong>, the constant value to be compared with.</li>
			<li><strong>operator</strong>, the operator for comparison. <em>("==")</em></li>
			<li><strong>strict</strong>, whether the comparison is strict (both value and type must be the same). <em>(false)</em></li>
		</ol>

		<h4><?php echo AdHtml::iconFA('book', array('fw' => TRUE)); ?> date : CDateValidator</h4>
		<p>Validates that the attribute value is a valid date, time or datetime.</p>
		<ol class="list">
			<li><strong>allowEmpty</strong>, whether the attribute value can be null or empty. <em>(true)</em></li>
			<li><strong>format</strong>, the format pattern that the date value should follow. This can be either a string or an array representing multiple formats. The formats are described in CDateTimeParser API. <em>('MM/dd/yyyy')</em></li>
			<li><strong>timestampAttribute</strong>, name of the attribute that will receive date parsing result. <em>(null)</em></li>
		</ol>
		<p><em>NOTE:</em> The date validator was added in Yii <strong>1.1.7</strong> - it's not available prior to that</p>
		<p><em>Example:</em></p>

		<?php $this->beginWidget('andystrap.widgets.AdHighlighter'); ?>
		array('org_datetime', 'date', 'format' => 'yyyy-M-d H:m:s'),
        <?php $this->endWidget(); ?>


		<h4><?php echo AdHtml::iconFA('book', array('fw' => TRUE)); ?> default : CDefaultValueValidator</h4>
		<p>Sets the attributes with the specified value. It does not do validation. Its existence is mainly to allow specifying attribute default values in a dynamic way.</p>
		<ol class="list">
			<li><strong>setOnEmpty</strong>, whether to set the default value only when the attribute value is null or empty string. <em>(true)</em></li>
			<li><strong>value</strong>, the default value to be set to the specified attributes.</li>
		</ol>

		<h4><?php echo AdHtml::iconFA('book', array('fw' => TRUE)); ?> email : CEmailValidator</h4>
		<p>Validates that the attribute value is a valid email address.</p>
		<ol class="list">
			<li><strong>allowEmpty</strong>, whether the attribute value can be null or empty. <em>(true)</em></li>
			<li><strong>allowName</strong>, whether to allow name in the email address. <em>(false)</em></li>
			<li><strong>checkMX</strong>, whether to check the MX record for the email address. <em>(false)</em></li>
			<li><strong>checkPort</strong>, whether to check port 25 for the email address. <em>(false)</em></li>
			<li><strong>fullPattern</strong>, the regular expression used to validate email addresses with the name part. Requires that the property "allowname" is on.</li>
			<li><strong>pattern</strong>, the regular expression used to validate the attribute value.</li>
		</ol>

		<h4><?php echo AdHtml::iconFA('book', array('fw' => TRUE)); ?> exist : CExistValidator</h4>
		<p>Validates that the attribute value exists in a table.</p>
		<ol class="list">
			<li><strong>allowEmpty</strong>, whether the attribute value can be null or empty. <em>(true)</em></li>
			<li><strong>attributeName</strong>, the ActiveRecord class attribute name that should be used to look for the attribute value being validated. <em>(null, meaning same attribute name)</em></li>
			<li><strong>className</strong>, the ActiveRecord class name that should be used to look for the attribute value being validated. <em>(null, meaning same class name)</em></li>
			<li><strong>criteria</strong>, additional query criteria. <em>(array())</em></li>
		</ol>

		<h4><?php echo AdHtml::iconFA('book', array('fw' => TRUE)); ?> file : CFileValidator</h4>
		<p>Verifies if an attribute is receiving a valid uploaded file.</p>
		<ol class="list">
			<li><strong>allowEmpty</strong>, whether the attribute requires a file to be uploaded or not. <em>(false)</em></li>
			<li><strong>maxFiles</strong>, the maximum file count the given attribute can hold. <em>(1)</em></li>
			<li><strong>maxSize</strong>, the maximum number of bytes required for the uploaded file. <em>(null, meaning no limit)</em></li>
			<li><strong>minSize</strong>, the minimum number of bytes required for the uploaded file. <em>(null, meaning no limit)</em></li>
			<li><strong>tooLarge</strong>, the error message used when the uploaded file is too large.</li>
			<li><strong>tooMany</strong>, the error message used if the count of multiple uploads exceeds limit.</li>
			<li><strong>tooSmall</strong>, the error message used when the uploaded file is too small.</li>
			<li><strong>types</strong>, a list of file name extensions that are allowed to be uploaded. <em>(null, meaning all extensions)</em></li>
			<li><strong>wrongType</strong>, the error message used when the uploaded file has an extension name that is not listed among extensions.</li>
			<li><strong>mimeTypes</strong>, a list of MIME-types of the file that are allowed to be uploaded. <em>(requires fileinfo PHP extension)</em></li>
			<li><strong>wrongMimeType</strong>, the error message used when the uploaded file has a MIME-type that is not listed among mimeTypes.</li>
		</ol>

		<h4><?php echo AdHtml::iconFA('book', array('fw' => TRUE)); ?> filter : CFilterValidator</h4>
		<p>Transforms the data being validated based on a filter.</p>
		<ol class="list">
			<li><strong>filter</strong>, the filter method.</li>
		</ol>
		<p><em>Examples:</em></p>
		<ul class="list">
			<li>With a custom function</li>
		</ul>
		<?php $this->beginWidget('andystrap.widgets.AdHighlighter'); ?>
		array('mycode', 'filter', 'filter' => 'strtoupper'),
        <?php $this->endWidget(); ?>
		<ul class="list">
			<li>With a custom method</li>
		</ul>
		<?php $this->beginWidget('andystrap.widgets.AdHighlighter'); ?>
		array('eanupc', 'filter', 'filter' => array($this, 'keepProductCode')),
		array('eanupc', 'filter', 'filter' => array(self, 'formatProductCode')),
		...
		public function keepProductCode($code) {
		    // returns a new value (uses $this) ...
		}
		static public function formatProductCode($code) {
		    // returns a new value (cannot use $this) ...
		}
        <?php $this->endWidget(); ?>
		<p><em>NOTE:</em> The filter validator maybe use with other validators for the same attribute. In this case one must pay attention to the order of the validators list as the filter validator will change the attribute value.</p>

		<h4><?php echo AdHtml::iconFA('book', array('fw' => TRUE)); ?> in : CRangeValidator</h4>
		<p>Validates that the attribute value is among the list (specified via range).</p>
		<ol class="list">
			<li><strong>allowEmpty</strong>, whether the attribute value can be null or empty. <em>(true)</em></li>
			<li><strong>not</strong>, whether to invert the validation logic. Since Yii 1.1.5. <em>(false)</em></li>
			<li><strong>range</strong>, list of valid values that the attribute value should be among.</li>
			<li><strong>strict</strong>, whether the comparison is strict (both type and value must be the same). <em>(false)</em></li>
		</ol>
		<p><em>Example:</em></p>
		<?php $this->beginWidget('andystrap.widgets.AdHighlighter'); ?>
		array('language', 'in', 'range' => array('en', 'fr', 'zn'), 'allowEmpty' => false),
        <?php $this->endWidget(); ?>

		<h4><?php echo AdHtml::iconFA('book', array('fw' => TRUE)); ?> length : CStringValidator</h4>
		<p>Validates that the attribute value is of certain length.</p>
		<ol class="list">
			<li><strong>allowEmpty</strong>, whether the attribute value can be null or empty. <em>(true)</em></li>
			<li><strong>encoding</strong> , string encoding. <em>(null, meaning unchecked)</em></li>
			<li><strong>is</strong>, exact length. <em>(null, meaning no limit)</em></li>
			<li><strong>max</strong>, maximum length. <em>(null, meaning no limit)</em></li>
			<li><strong>min</strong>, minimum length. <em>(null, meaning no limit)</em></li>
			<li><strong>tooLong</strong>, user-defined error message used when the value is too long.</li>
			<li><strong>tooShort</strong>, user-defined error message used when the value is too short.</li>
		</ol>

		<h4><?php echo AdHtml::iconFA('book', array('fw' => TRUE)); ?> numerical : CNumberValidator</h4>
		<p>Validates that the attribute value is a number.</p>

		<ol class="list">
			<li><strong>allowEmpty</strong>, whether the attribute value can be null or empty. <em>(true)</em></li>
			<li><strong>integerOnly</strong>, whether the attribute value can only be an integer. <em>(false)</em></li>
			<li><strong>max</strong>, upper limit of the number. <em>(null, meaning no limit)</em></li>
			<li><strong>min</strong>, lower limit of the number. <em>(null, meaning no limit)</em></li>
			<li><strong>tooBig</strong>, user-defined error message used when the value is too big.</li>
			<li><strong>tooSmall</strong>, user-defined error message used when the value is too small.</li>
		</ol>
		<p><em>Example:</em></p>
		<?php $this->beginWidget('andystrap.widgets.AdHighlighter'); ?>
		array(
		    'quantity', 'numerical',
		    'integerOnly' => true,
		    'min' => 1,
		    'max' => 250,
		    'tooSmall' => 'You must order at least 1 piece',
		    'tooBig' => 'You cannot order more than 250 pieces at once'
		),
        <?php $this->endWidget(); ?>

		<h4><?php echo AdHtml::iconFA('book', array('fw' => TRUE)); ?> match : CRegularExpressionValidator</h4>
		<p>Validates that the attribute value matches to the specified regular expression.</p>
		<ol class="list">
			<li><strong>allowEmpty</strong>, whether the attribute value can be null or empty. <em>(true)</em></li>
			<li><strong>not</strong>, whether to invert the validation logic. Since Yii 1.1.5. <em>(false)</em></li>
			<li><strong>pattern</strong>, the regular expression to be matched with.</li>
		</ol>

		<h4><?php echo AdHtml::iconFA('book', array('fw' => TRUE)); ?> required : CRequiredValidator</h4>
		<p>Validates that the specified attribute does not have null or empty value.</p>
		<ol class="list">
			<li><strong>requiredValue</strong>, the desired value that the attribute must have. <em>(null)</em></li>
			<li><strong>strict</strong>, whether the comparison to "requiredValue" is strict. <em>(false)</em></li>
		</ol>

		<h4><?php echo AdHtml::iconFA('book', array('fw' => TRUE)); ?> safe : CSafeValidator</h4>
		<p>Marks the associated attributes to be safe for massive assignments.</p>

		<h4><?php echo AdHtml::iconFA('book', array('fw' => TRUE)); ?> type : CTypeValidator</h4>
		<p>Verifies if the attribute is of the type specified by type. (integer, float, string, date, time, datetime). Since 1.1.7 you should use CDateValidator to validate dates.</p>
		<ol class="list">
			<li><strong>allowEmpty</strong>, whether the attribute value can be null or empty. <em>(true)</em></li>
			<li><strong>dateFormat</strong>, the format pattern that the date value should follow. <em>('MM/dd/yyyy')</em></li>
			<li><strong>datetimeFormat</strong>, the format pattern that the datetime value should follow. <em>('MM/dd/yyyy hh:mm')</em></li>
			<li><strong>timeFormat</strong>, the format pattern that the time value should follow. <em>('hh:mm')</em></li>
			<li><strong>type</strong>, the data type that the attribute should be. <em>('string')</em></li>
		</ol>
		<p>Example of time rule:</p>
		<?php $this->beginWidget('andystrap.widgets.AdHighlighter'); ?>
		array('org_starttime, org_finishtime', 'type', 'type' => 'time', 'timeFormat' => 'hh:mm'),
        <?php $this->endWidget(); ?>

		<h4><?php echo AdHtml::iconFA('book', array('fw' => TRUE)); ?> unique : CUniqueValidator</h4>
		<p>Validates that the attribute value is unique in the corresponding database table.</p>
		<ol class="list">
			<li><strong>allowEmpty</strong>, whether the attribute value can be null or empty. <em>(true)</em></li>
			<li><strong>attributeName</strong>, the ActiveRecord class attribute name that should be used to look for the attribute value being validated. <em>(null, meaning same attribute name)</em></li>
			<li><strong>caseSensitive</strong>, whether the comparison is case sensitive. <em>(true)</em></li>
			<li><strong>className</strong>, the ActiveRecord class name that should be used to look for the attribute value being validated. <em>(null, meaning same class name)</em></li>
			<li><strong>criteria</strong>, additional query criteria. <em>(array())</em></li>
			<li><strong>skipOnError</strong>, whether this validation rule should be skipped if when there is already a validation error for the current attribute. <em>(true)</em></li>
		</ol>
		<p>By default, CUniqueValidator works with a single attribute that's presumed to be unique across the whole model table, but it can work with multi-attribute unique constraints as well. See CUniqueValidator::c2215 for an example.</p>

		<h4><?php echo AdHtml::iconFA('book', array('fw' => TRUE)); ?> unsafe : CUnsafeValidator</h4>
		<p>Marks the associated attributes to be unsafe so that they cannot be massively assigned.</p>

		<h4><?php echo AdHtml::iconFA('book', array('fw' => TRUE)); ?> url : CUrlValidator</h4>
		<p>Validates that the attribute value is a valid "http" or "https" URL.</p>
		<ol class="list">
			<li><strong>allowEmpty</strong>, whether the attribute value can be null or empty. <em>(true)</em></li>
			<li><strong>defaultScheme</strong>, the default URI scheme. It will be prepended to the input, if the input doesn't contain one. Since Yii 1.1.7. <em>(null, meaning the url must contain a scheme part)</em></li>
			<li><strong>pattern</strong>, the regular expression used to validates the attribute value.</li>
			<li><strong>validSchemes</strong>, the allowed URI scheme. <em>(array('http', 'https'))</em></li>
		</ol>

	</section>

</section>