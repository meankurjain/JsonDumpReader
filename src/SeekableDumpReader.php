<?php

namespace Wikibase\JsonDumpReader;

/**
 * Package public
 * @since 1.2.0
 *
 * @licence GNU GPL v2+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
interface SeekableDumpReader extends DumpReader {

	/**
	 * @return int
	 * @throws DumpReadingException
	 */
	public function getPosition();

	/**
	 * @param int $position
	 * @throws DumpReadingException
	 */
	public function seekToPosition( $position );

}