<?php
/**
 * @copyright (c) 2012, Associazione UniversiBO
 * @license GPLv3
 */
namespace Universibo\Bundle\ForumBundle\DAO;

/**
 * @author Davide Bellettini <davide.bellettini@gmail.com>
 */
interface ForumDAOInterface
{
    /**
     * Gets the maximum Forum ID
     */
    public function getMaxId();
}
