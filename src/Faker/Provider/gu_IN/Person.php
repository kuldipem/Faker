<?php

namespace Faker\Provider\en_US;

class Person extends \Faker\Provider\Person
{
    protected static $maleNameFormats = array(
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{titleMale}} {{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}} {{suffix}}',
        '{{titleMale}} {{firstNameMale}} {{lastName}} {{suffix}}',
    );

    protected static $femaleNameFormats = array(
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}} {{suffix}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastName}} {{suffix}}',
    );

    protected static $firstNameMale = array( 
'કુલદીપ','વિશાલ','ધર્મેશ','નીરજ','નીરવ','રાકેશ','રાજવીર','વૈભવ','હિતેન',
'પરેશ','અક્ષય','રાજુ','મંથન','પ્રશાંત','પ્રતિક','સાગર','વિવેક','પાર્થ',
'અર્જુન','ક્રિષ્ના','રાજ','ગોપાલ','ઉમેશ','દીપક','રોહન','હર્ષ',
'આકાશ','બાબુલ','બાદશાહ','બલબીર','બાલાજી','બલરાજ','બલવંત',
'ભગત','ભાવેશ','ભૂષણ','ભુવન','બિજોય','ચૈતન્ય','ચંદ્રેશ','ચંદુ',
'ચેતન','ચિંતન','ચિરાયુ','દીન','દેવેન','ધવલ','ધીરેન','દીક્ષિત',
'દુષ્યંત','ગણેશ','ગૌરવ','ગૌરાંગ','ગિરીશ','ગોવર્ધન','ગુલઝાર','હાર્દિક', );

    protected static $firstNameFemale = array(
'કિરણ','હેમાંગી','આસ્થા','કિરણ','નિશા','બિના','ટીના','શિલ્પા',
'જ્યોતિ','નિરાલી','પાયલ','જાનકી','જલ્પા','જાગૃતિ','સંજના','કિર્તી','કિશોરી',
'કોમલ','જ્યાં','વરણી','લક્ષ્મી','લલિતા','માધુરી','માહેશ્વરી','મહી','મહિમા','મમતા',
'મનીષા','મણાલી','મંજુલા','માન્યા','મૌસમ','માયા','માયાવતી','મોહિની',
'મોના','મુક્તિ','નૈના','નલિની','નેન્સી','નંદિતા','નંદિની','નરગીસ',
'નર્મદા','નતાશા','નીરા','નેહા','નિકિતા','નિર્મલા','નિરુપમા','નિવેદિતા','નૂતન','પલ્લવી',
    );

    protected static $lastName = array(
'પીપળીયા','પરમાર','સરવૈયા','સોલંકી','ચોવાન','મોકાણી','ડોબરિયા',
'પાનસુરિયા','ત્રાડા','વાળા','કંડોળિયા','બાવરીયા','ચાંદ્રાણી','નિમાવત','માવાણી','',
    );
}
