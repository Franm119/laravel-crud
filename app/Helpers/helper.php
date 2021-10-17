<?php
        
    /**
     * Activación de links de navegación
     *
     * @param  mixed $routename
     * @return void
     */
    function activelinks($routename){
        return request()->routeIs($routename) ? 'active' : '';
    }