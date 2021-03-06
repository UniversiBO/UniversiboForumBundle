<?php
/**
 * @copyright (c) 2012, Associazione UniversiBO
 * @license GPLv3
 */
namespace Universibo\Bundle\ForumBundle\DAO;

/**
 * @author Davide Bellettini <davide.bellettini@gmail.com>
 */
interface GroupDAOInterface
{
    /**
     * Creates a new group
     *
     * @param  string  $name
     * @param  string  $description
     * @return integer group id
     */
    public function create($name, $description);
}
