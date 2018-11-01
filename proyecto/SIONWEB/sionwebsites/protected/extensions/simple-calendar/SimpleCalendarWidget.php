<?php

class SimpleCalendarWidget extends CWidget {
    
    protected $_day_ini             = null;
    protected $_month_ini           = null;
    protected $_year_ini           = null;
    protected $_day_fini             = null;
    protected $_month_fini           = null;
    protected $_year_fini           = null;
    
    protected $_proceso         = null;
    protected $_fecha           = null;
    
    protected $_os           = null;
    protected $_ordenes           = null;
    protected $_vista           = false;
    
    public function init() {
        $this->initDate();
        parent::init();
    }
    
    protected function initDate() {
        if(isset($_GET['year_ini'])) {
            $this->year_ini = $_GET['year_ini'];
        }
        
        if(isset($_GET['month_ini'])) {
            $this->month_ini = $_GET['month_ini'];
        }
        
        if(isset($_GET['day_ini'])) {
            $this->day_ini = $_GET['day_ini'];
        }
        
        if(isset($_GET['year_fini'])) {
            $this->year_ini = $_GET['year_fini'];
        }
        
        if(isset($_GET['month_fini'])) {
            $this->month_ini = $_GET['month_fini'];
        }
        
        if(isset($_GET['day_fini'])) {
            $this->day_ini = $_GET['day_fini'];
        }
        
        if(isset($_GET['proceso'])) {
            $this->proceso = $_GET['proceso'];
        }
        if(isset($_GET['os'])) {
            $this->os = $_GET['os'];
        }
        if(isset($_GET['ordenes'])) {
            $this->ordenes = $_GET['ordenes'];
        }
         if(isset($_GET['vista'])) {
            $this->vista = $_GET['vista'];
        }
    }
    
    public function run() {
        $this->registerScripts();
        $this->render('simple-calendar');
    }
    
    protected function registerScripts() {
        $cssFile = dirname(__FILE__).DIRECTORY_SEPARATOR.'css/simple-calendar.css';
        $publishedCss = Yii::app()->assetManager->publish($cssFile);
        Yii::app()->clientScript->registerCssFile($publishedCss);
    }
    
    public function getYear_ini() {
        if(is_null($this->_year_ini)) {
            $this->_year_ini = (int)date('Y');
        }
        return $this->_year_ini;
    }
    
    public function getMonth_ini() {
        if(is_null($this->_month_ini)) {
            $this->_month_ini = (int)date('n');
        }
        return $this->_month_ini;
    }
    
    public function getDay_ini() {
        if(is_null($this->_day_ini)) {
            $this->_day_ini = (int)date('j');
        }
        return $this->_day_ini;
    }
    
    public function getYear_fini() {
        if(is_null($this->_year_fini)) {
            $this->_year_fini = (int)date('Y');
        }
        return $this->_year_fini;
    }
    
    public function getMonth_fini() {
        if(is_null($this->_month_fini)) {
            $this->_month_fini = (int)date('n');
        }
        return $this->_month_fini;
    }
    
    public function getDay_fini() {
        if(is_null($this->_day_fini)) {
            $this->_day_fini = (int)date('j');
        }
        return $this->_day_fini;
    }
    
    public function getProceso() {
        if(is_null($this->_proceso)) {
            $this->_proceso = "p";
        }
        return $this->_proceso;
    }
    public function getFecha() {
        if(is_null($this->_fecha)) {
            $this->_fecha = "p";
        }
        return $this->_fecha;
    }
    public function getOs() {
        if(is_null($this->_os)) {
            $this->_os = '';
        }
        return $this->_os;
    }
       public function getOrdenes() {
        if(is_null($this->_ordenes)) {
            $this->_ordenes = '';
        }
        return $this->_ordenes;
    }
     public function getVista() {
        if(is_null($this->_vista)) {
            $this->_vista = false;
        }
        return $this->_vista;
    }
    
    public function getMonthName() {
        return Yii::app()->dateFormatter->format('MMMM', $this->getTimestamp());
    }
    public function setVista($value) {
            $this->_vista = $value;
    }
     public function setOs($value) {
        if( count($value)>0) {
            $this->_os = $value;
        } else {
            throw new Exception(Yii::t('simple-calendar', 'Invalid value for Os. It must be a non-negative year'));
        }
        
    }
     public function setOrdenes($value) {
        if( count($value)>0) {
            $this->_ordenes = $value;
        } else {
            throw new Exception(Yii::t('simple-calendar', 'Invalid value for Os. It must be a non-negative year'));
        }
        
    }
    
    public function setProceso($value) {
        if( count($value)>0) {
            $this->_proceso = $value;
        } else {
            throw new Exception(Yii::t('simple-calendar', 'Invalid value for Proceso. It must be a non-negative year'));
        }
        
    }
    public function setFecha($value) {
        if( count($value)>0) {
            $this->_fecha = $value;
        } else {
            throw new Exception(Yii::t('simple-calendar', 'Invalid value for Proceso. It must be a non-negative year'));
        }
        
    }
    public function setYear_ini($value) {
        if(is_numeric($value) && $value > 0) {
            $this->_year_ini = $value;
        } else {
            throw new Exception(Yii::t('simple-calendar', 'Invalid value for Year. It must be a non-negative year'));
        }
        
    }
    public function setMonth_ini($value) {
        if(is_numeric($value) && $value >= 1 && $value <= 12) {
            $this->_month_ini = $value;
            if(!$this->dayIsInCurrentMonth($this->day_ini)) {
                $this->day_ini = $this->getDaysInCurrentMonth();
            }
        } else {
            throw new Exception(
                Yii::t('simple-calendar', 'Invalid value for month. Please use a value between 1 and 12.')
            );
        }
    }
    public function setDay_ini($value) {
        if(is_numeric($value)) {
            if($this->dayIsInCurrentMonth($value)) {
                $this->_day_ini = $value;
            } else {
                throw new Exception(
                    Yii::t(
                        'simple-calendar', 
                        'Invalid value for day. For the specified month, please user a value between 1 and {daysInCurrentMonth}.', 
                        array('{daysInCurrentMonth}' => $this->getDaysInCurrentMonth())
                    )
                );
            }
        } else {
            throw new Exception(Yii::t('simple-calendar', 'Invalid value for day.'));
        }
    }
    public function setYear_fini($value) {
        if(is_numeric($value) && $value > 0) {
            $this->_year_fini = $value;
        } else {
            throw new Exception(Yii::t('simple-calendar', 'Invalid value for Year. It must be a non-negative year'));
        }
        
    }
    public function setMonth_fini($value) {
        if(is_numeric($value) && $value >= 1 && $value <= 12) {
            $this->_month_fini = $value;
            if(!$this->dayIsInCurrentMonth($this->day_fini)) {
                $this->day_fini = $this->getDaysInCurrentMonth();
            }
        } else {
            throw new Exception(
                Yii::t('simple-calendar', 'Invalid value for month. Please use a value between 1 and 12.')
            );
        }
    }
    public function setDay_fini($value) {
        if(is_numeric($value)) {
            if($this->dayIsInCurrentMonth($value)) {
                $this->_day_fini = $value;
            } else {
                throw new Exception(
                    Yii::t(
                        'simple-calendar', 
                        'Invalid value for day. For the specified month, please user a value between 1 and {daysInCurrentMonth}.', 
                        array('{daysInCurrentMonth}' => $this->getDaysInCurrentMonth())
                    )
                );
            }
        } else {
            throw new Exception(Yii::t('simple-calendar', 'Invalid value for day.'));
        }
    }
    
    public function getTimestamp() {
        return CDateTimeParser::parse("{$this->year_ini}-{$this->month_ini}-{$this->day_ini}", 'yyyy-M-d');
    }
    
    public function getFirstDayOfTheWeek() {
        $firstDayTimestamp = CDateTimeParser::parse("{$this->year_ini}-{$this->month_ini}-1", 'yyyy-M-d');
        return date('w', $firstDayTimestamp);
    }
    
    public function getDaysInCurrentMonth() {
        return $this->getDaysInMonth($this->month_ini, $this->year_ini);
    }
    
    public function getDaysInMonth($month_ini, $year_ini) {
        return cal_days_in_month(CAL_GREGORIAN, $month_ini, $year_ini);
    }
    
    public function getPreviousLink() {
        return $this->getLink(
            $this->previousYear, 
            $this->previousMonth, 
            $this->getDaysInMonth($this->previousMonth, $this->previousYear)
        );
    }
    
    public function getPreviousMonth() {
        if($this->month_ini == 1) {
            return 12;
        } else {
            return $this->month_ini - 1;
        }
    }
    
    public function getPreviousYear() {
        if($this->month_ini == 1) {
            return $this->year_ini - 1;
        } else {
            return $this->year_ini;
        }
    }
    
    public function getNextLink() {
        return $this->getLink(
            $this->nextYear, 
            $this->nextMonth, 
            $this->getDaysInMonth($this->nextMonth, $this->nextYear)
        );
    }
    
    public function getNextMonth() {
        if($this->month_ini == 12) {
            return 1;
        } else {
            return $this->month_ini + 1;
        }
    }
    
    public function getNextYear() {
        if($this->month_ini == 12) {
            return $this->year_ini + 1;
        } else {
            return $this->year_ini;
        }
    }
    
    public function getDayLink($day_ini) {
        return $this->getLink($this->year_ini, $this->month_ini, $day_ini);
    }
    
    protected function getLink($year_ini = null, $month_ini = null, $day_ini = null) {
        $params = array();
        if(!is_null($year_ini)) {
            $params['year_ini'] = $year_ini;
        }
        
        if(!is_null($month_ini)) {
            $params['month_ini'] = $month_ini;
        }
        
        if(!is_null($day_ini)) {
            $params['day_ini'] = $day_ini;
        }
        
        $params = array_merge($_GET, $params);
        return Yii::app()->getController()->createUrl('', $params);
    }
    
    private function dayIsInCurrentMonth($day_ini) {
        return $day_ini >= 1 && $day_ini <= $this->daysInCurrentMonth;
    }
}

?>
