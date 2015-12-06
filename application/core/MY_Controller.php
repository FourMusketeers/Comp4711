<?php

/**
 * core/MY_Controller.php
 *
 * Default application controller
 *
 * @author		Leon Ho
 * ------------------------------------------------------------------------
 */
class Application extends CI_Controller {

    protected $data = array();      // parameters for view components
    protected $id;                  // identifier for our content

    /**
     * Constructor.
     * Establish view parameters & load common helpers
     */

    function __construct() {
        parent::__construct(); 
        $this->data = array();
        $this->errors = array();
        $this->data['pageTitle'] = 'welcome';   // our default page
        $this->load->library("parser"); //Parser to handle templating files. 
    }

    /**
     * Inserts the pagebody into the template, and applies any data to the views. 
     */
    function render() {
        //Set the menu bar content, update menu options in config/menu_choices
        $this->data['menubar'] = $this->parser->parse('_topMenuBar', $this->config->item('menu_choices'),true);
        $this->data['content'] = $this->parser->parse($this->data['pagebody'], $this->data, true);

        // Convert caboose output into view parameters
        $this->data['caboose_styles'] = $this->caboose->styles();
        $this->data['caboose_scripts'] = $this->caboose->scripts();
        $this->data['caboose_trailings'] = $this->caboose->trailings();

        // finally, build the browser page!
        //$this->data['data'] = &$this->data;
        $this->parser->parse('_template', $this->data);
    }

}

/* End of file MY_Controller.php */
/* Location: application/core/MY_Controller.php */