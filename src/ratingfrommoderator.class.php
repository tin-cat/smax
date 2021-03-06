<?php
	/**
	 * @package Smax
	 * @category Engine
	 */

	namespace Smax;

	/**
	 * A class that represents an obtained single rating about a content emmited by a site's moderator
	 * @package Smax
	 * @category Engine
	 */
	class RatingFromModerator extends Rating {
		/**
		 * Constructs the object with the given $setup specification
		 * @param array $setup A key-value array containing the specification
		 * @return boolean True when constrution was done without errors, false otherwise
		 */
		function __construct($setup) {
			if (!parent::__construct($setup))
				return false;
			$this->setRating($setup["rating"]);
			return true;
		}

		/**
		 * Returns a description for this rating
		 * @return string The description
		 */
		function getDescription() {
			return "Rating added by a moderator";
		}

		/**
		 * @param integer $attitude The algorithm attitude to use, one of the available Smax\ATTITUDE_*. Uses the configured attitude if omitted
		 * @return double The certainty
		 */
		function getCertainty($attitude = ATTITUDE_DEFAULT) {
			$certaintyTable = Main::getAlgorithmKey("certaintyTable", RATING_TYPE_FROM_MODERATOR, $attitude);
			return $certaintyTable[$this->getRating()];
		}

		/**
		 * @param integer $attitude The algorithm attitude to use, one of the available Smax\ATTITUDE_*. Uses the configured attitude if omitted
		 * @return double The power
		 */
		function getPower($attitude = ATTITUDE_DEFAULT) {
			return Main::getAlgorithmKey("power", RATING_TYPE_FROM_MODERATOR, $attitude);
		}
	}

?>