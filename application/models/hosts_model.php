<?php
class hosts_model extends CI_MODEL {
    public function buscaHosts() {
        return $this->db->query('select nagios_hosts.display_name, nagios_hoststatus.output, nagios_hoststatus.current_state 
        from nagios_hosts inner join nagios_hoststatus on nagios_hosts.host_object_id = nagios_hoststatus.host_object_id;')->result_array();
    }
    
    public function buscaServicos() {
        return $this->db->query('select nagios_hosts.display_name , nagios_services.display_name, nagios_servicestatus.output, nagios_servicestatus.current_state 
        from nagios_services
        inner join nagios_servicestatus on nagios_services.service_object_id = nagios_servicestatus.service_object_id inner join nagios_hosts 
        on nagios_services.host_object_id = nagios_hosts.host_object_id ;')->result_array();
    }
}